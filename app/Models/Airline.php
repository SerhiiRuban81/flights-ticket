<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airline extends Model
{

    use HasFactory;

    public $table = 'airlines';

    public $fillable = [
        'name', 
        'code', 
        'logo'
    ];

    public function flights()
    {
        return $this->hasMany(Flight::class);
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }
}
