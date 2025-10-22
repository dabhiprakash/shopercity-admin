<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    protected $table = 'contact_us';

    protected $fillable = [
        'bissness_name',
        'mobile',
        'city',
        'email',
        'note'
    ];

    public $timestamps = false;
}
