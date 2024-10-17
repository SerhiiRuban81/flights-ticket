<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;
    protected $fillable = [
        'flight_number', 
        'airline_id', 
        //'departure_airport_id',
        //'arrival_airport_id',
        'departure_date', 
        'departure_time',
        'arrival_date', 
        'arrival_time', 
        'price', 
        'seats_available'
    ];
    // public function departure_airport()
    // {
    //     return $this->belongsTo(Airport::class, 'departure_airport_id');
    // }

    // public function arrival_airport()
    // {
    //     return $this->belongsTo(Airport::class, 'arrival_airport_id');
    // }

     public function airline()
     {
         return $this->belongsTo(Airline::class);
     }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}

