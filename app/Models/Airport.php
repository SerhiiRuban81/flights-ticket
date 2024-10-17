<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    use HasFactory;

    protected $fillable = [
       'name', 
       'code', 
       'city', 
       'country_id'
    ];
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function departure_flights()
    {
        return $this->hasMany(Flight::class, 'departure_airport_id');
    }

    public function arrival_flights()
    {
        return $this->hasMany(Flight::class, 'arrival_airport_id');
    }
    
}
