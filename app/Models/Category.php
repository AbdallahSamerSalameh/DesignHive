<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'admin_id'
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

}
