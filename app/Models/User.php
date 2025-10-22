<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'first_name','last_name','email','password','mobile','address','city',
        'district','state','country','image','pincode','aadhar_number',
        'status','balance','withdraw_total','is_active','referral_id','upline_id','otp','otp_expires_at'
    ];

    protected $hidden = [
        'password','otp'
    ];

    protected $casts = [
        'otp_expires_at' => 'datetime',
    ];
}
