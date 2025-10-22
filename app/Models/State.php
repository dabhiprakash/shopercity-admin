<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table = 'state';

    protected $fillable = [
        'state_code',
        'name'
    ];

    public $timestamps = false; // table has no created_at/updated_at
}
