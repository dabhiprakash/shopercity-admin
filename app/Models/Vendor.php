<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $table = 'vendor';

    protected $fillable = [
        'user_id',
        'category_id',
        'name',
        'store_name',
        'contact',
        'email',
        'username',
        'password',
        'street',
        'city_id',
        'district',
        'state_id',
        'country_id',
        'zipcode',
        'lat',
        'longitude',
        'plan_id',
        'desc_1',
        'desc_2',
        'discount_id',
        'delivery_status',
        'created_by',
        'modified_by',
        'image',
        'banner',
        'status',
        'reason',
        'youtube_link',
        'starting_date',
        'end_date'
    ];

    public $timestamps = false;

    // Relationships (optional)
    public function category()
    {
        return $this->belongsTo(\App\Models\Category::class, 'category_id');
    }

    public function city()
    {
        return $this->belongsTo(\App\Models\City::class, 'city_id');
    }

    public function state()
    {
        return $this->belongsTo(\App\Models\State::class, 'state_id');
    }
}
