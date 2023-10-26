<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $primaryKey = 'reg__no';
    public $timestamps = true;
    protected $fillable = [
        'reg__no',
        'name',
        'bus_no',
        'route_name',
        'email',
        'password'
    ];

    public function busRoute()
    {
        return $this->belongsTo(BusRoute::class);
    }
}
