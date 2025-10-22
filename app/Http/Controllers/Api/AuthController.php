<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class AuthController
{
    // Register User
    public function register(Request $request)
    {
        // 🛡️ 1. Validate input
        $validator = Validator::make($request->all(), [
            'first_name'   => 'required|string|max:50',
            'last_name'    => 'nullable|string|max:50',
            'email'        => 'required|email|unique:users,email',
            'password'     => 'required|string|min:6',
            'mobile'       => 'nullable|string|max:15',
            'district'     => 'required|string',
            'state'        => 'required|string',
            'country'      => 'required|string',
            'pincode'      => 'required|string',
            'image'        => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'referral_id'  => 'nullable|string',
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'status'  => false,
                'message' => 'Validation failed',
                'errors'  => $validator->errors()
            ], 422);
        }
    
        $imagePath = null;
        $otp = rand(100000, 999999);
        if ($request->hasFile('image')) {
            $imageName = time() .$otp.'_' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('uploads/users'), $imageName);
            $imagePath = 'uploads/users/' . $imageName;
        }
    
        $user = User::create([
            'first_name'       => $request->first_name,
            'last_name'        => $request->last_name,
            'email'            => $request->email,
            'password'         => Hash::make($request->password),
            'mobile'           => $request->mobile,
            'district'         => $request->district,
            'state'            => $request->state,
            'country'          => $request->country,
            'pincode'          => $request->pincode,
            'image'            => $imagePath,
            'referral_id'      => $request->referral_id,
            'otp'              => $otp,
            'otp_expires_at'   => Carbon::now()->addMinutes(10),
            'status'           => 0,
        ]);
    
        try {
            Mail::raw("Your verification OTP is: $otp", function($message) use ($user) {
                $message->to($user->email)
                        ->subject('Email Verification OTP');
            });
        } catch (\Exception $e) {
            return response()->json([
                'status'  => false,
                'message' => 'User registered but email could not be sent.',
                'error'   => $e->getMessage()
            ], 500);
        }
    
        return response()->json([
            'status'  => true,
            'message' => 'User registered successfully. OTP sent to email.',
        ], 201);
    }
    
    // Verify OTP
    public function verifyOtp(Request $request){
        $validator = Validator::make($request->all(), [
            'email'=>'required|email|exists:users,email',
            'otp'=>'required|digits:6'
        ]);

        if($validator->fails()) return response()->json($validator->errors(),422);

        $user = User::where('email',$request->email)->first();

        if($user->otp != $request->otp) return response()->json(['message'=>'Invalid OTP'],400);
        if(Carbon::now()->gt($user->otp_expires_at)) return response()->json(['message'=>'OTP expired'],400);

        $user->is_active = 1;
        $user->otp = null;
        $user->otp_expires_at = null;
        $user->save();

        return response()->json(['message'=>'Email verified successfully']);
    }

    // Login
    public function login(Request $request){
        $validator = Validator::make($request->all(),[
            'email'=>'required|email',
            'password'=>'required|string|min:6'
        ]);

        if($validator->fails()) return response()->json($validator->errors(),422);

        $user = User::where('email',$request->email)->first();
        if(!$user || !Hash::check($request->password,$user->password)){
            return response()->json(['message'=>'Invalid credentials'],401);
        }

        if(!$user->is_active) return response()->json(['message'=>'Email not verified'],403);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'token'=>$token,
            'user'=>$user
        ]);
    }

    // Forgot Password
    public function forgotPassword(Request $request){
        $validator = Validator::make($request->all(),['email'=>'required|email|exists:users,email']);
        if($validator->fails()) return response()->json($validator->errors(),422);

        $user = User::where('email',$request->email)->first();
        $otp = rand(100000,999999);
        $user->otp = $otp;
        $user->otp_expires_at = Carbon::now()->addMinutes(10);
        $user->save();

        Mail::raw("Your password reset OTP is: $otp", function($message) use($user){
            $message->to($user->email)->subject('Password Reset OTP');
        });

        return response()->json(['message'=>'OTP sent to email for password reset']);
    }

    // Reset Password
    public function resetPassword(Request $request){
        $validator = Validator::make($request->all(),[
            'email'=>'required|email|exists:users,email',
            'otp'=>'required|digits:6',
            'password'=>'required|string|min:6|confirmed'
        ]);
        if($validator->fails()) return response()->json($validator->errors(),422);

        $user = User::where('email',$request->email)->first();
        if($user->otp != $request->otp) return response()->json(['message'=>'Invalid OTP'],400);
        if(Carbon::now()->gt($user->otp_expires_at)) return response()->json(['message'=>'OTP expired'],400);

        $user->password = Hash::make($request->password);
        $user->otp = null;
        $user->otp_expires_at = null;
        $user->save();

        return response()->json(['message'=>'Password reset successfully']);
    }

    // Change Password
    public function changePassword(Request $request){
        $validator = Validator::make($request->all(),[
            'old_password'=>'required|string',
            'new_password'=>'required|string|min:6|confirmed'
        ]);
        if($validator->fails()) return response()->json($validator->errors(),422);

        $user = $request->user();
        if(!Hash::check($request->old_password,$user->password))
            return response()->json(['message'=>'Old password does not match'],400);

        $user->password = Hash::make($request->new_password);
        $user->save();
        $token = $user->createToken('auth_token')->plainTextToken;
        return response()->json(['message'=>'Password changed successfully', 'token'=>$token,]);
    }

    // Logout
    public function logout(Request $request){
        $request->user()->tokens()->delete();
        return response()->json(['message'=>'Logged out successfully']);
    }
}
