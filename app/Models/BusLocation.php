<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusLocation extends Model
{
    use HasFactory;
    protected $table = 'bus_location';
    public $timestamps = true;
    protected $fillable = [
        'bus_no',
        'latitude',
        'longitude',
    ];
}
