<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'city';

    protected $fillable = [
        'country_id',
        'state_id',
        'name',
        'created_by',
        'modified_by'
    ];

    public $timestamps = false; // since your table has no created_at / updated_at
}
