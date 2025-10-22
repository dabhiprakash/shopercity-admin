<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class AuthController extends Controller
{
    // Register User
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name'=>'required|string|max:50',
            'last_name'=>'nullable|string|max:50',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|string|min:6|confirmed',
            'mobile'=>'nullable|string|max:15',
            'district'=>'required|string',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        $otp = rand(100000, 999999);

        $user = User::create([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'mobile'=>$request->mobile,
            'district'=>$request->district,
            'otp'=>$otp,
            'otp_expires_at'=>Carbon::now()->addMinutes(10),
        ]);

        // Send OTP Email
        Mail::raw("Your verification OTP is: $otp", function($message) use($user){
            $message->to($user->email)
                    ->subject('Email Verification OTP');
        });

        return response()->json(['message'=>'User registered successfully, OTP sent to email.'],201);
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
            'access_token'=>$token,
            'token_type'=>'Bearer',
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

        return response()->json(['message'=>'Password changed successfully']);
    }

    // Logout
    public function logout(Request $request){
        $request->user()->tokens()->delete();
        return response()->json(['message'=>'Logged out successfully']);
    }
}
