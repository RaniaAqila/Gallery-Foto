<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GallaryImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'caption',
        'category',
        'image',
    ];

    // Menentukan nama tabel yang sesuai
    protected $table = 'galeryimages'; 
}
 