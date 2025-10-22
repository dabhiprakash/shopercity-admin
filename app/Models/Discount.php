<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    protected $table = 'discount';

    protected $fillable = [
        'name',
        'image',
        'created_by',
        'modified_by'
    ];

    public $timestamps = false; // Using created_by/modified_by as dates
}
