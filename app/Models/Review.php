<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $tables = 'reviews';
    protected $fillable = [
        'vehicle_id',
        'user_id',
        'name',
        'email',
        'comment',
        'rating',
    ];
    
}
