<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'image',
        'title',
        'desc',
        'price',
        'stock',
        'timestamp',
        'created_at',
        'updated_at',
    ];
}
