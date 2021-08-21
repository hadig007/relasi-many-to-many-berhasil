<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'slug',
        'category',
    ];
    use HasFactory;
    public function posts()
    {
        return $this->belongsToMany('App\Models\Post');
    }
}
