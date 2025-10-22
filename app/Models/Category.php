<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';

    protected $fillable = [
        'name',
        'parent',
        'description',
        'image',
        'created_by',
        'modified_by',
    ];

    protected $appends = ['image_url'];

    public function getImageUrlAttribute()
    {
        return $this->image ? url('uploads/categories/' . $this->image) : null;
    }
}
