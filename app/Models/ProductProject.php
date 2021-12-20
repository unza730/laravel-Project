<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductProject extends Model
{
    use HasFactory;
     protected $table = 'productproject';
    protected $fillable = [
        'title',
        'description',
        'price',
    ];
}
