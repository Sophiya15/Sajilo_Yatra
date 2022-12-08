<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reporting extends Model
{
    use HasFactory;
    protected $table = 'reportings';
protected $fillable = [
    'vehicle_name', 
    'date',
    'driver_name',
    'driver_email',
    'problem',
    'solution',
];
public function driver()
{
    return $this->belongsTo(Driver::class);
}
public function vehicle()
    {
        return $this->hasMany(Vehicle::class);
    }
}
