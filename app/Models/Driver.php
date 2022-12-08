<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;
    protected $table = 'drivers';
    protected $fillable = [
        'name',
        'email',
        'address',
        'phone',
        'citizenship',
        'age',
        'license',
        'experience',
        'photopath0',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function vehicle()
    {
        return $this->hasMany(Vehicle::class);
    }
}
