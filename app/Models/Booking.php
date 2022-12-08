<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table = 'bookings';
    protected $fillable = [
        'user_id',
        'name',
        'address',
        'phone',
        'from',
        'to',
        'start_date',
        'end_date',
        'status',
        'vehicle_id',

    ];
    public function vehicle()
    {
        return $this->belongsTo(vehicle::class);
    }
}
