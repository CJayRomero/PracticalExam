<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Allow mass assignment for these attributes
    protected $fillable = [
        'title',
        'body',
        // Add other fields you want to allow here
    ];
}
