<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusRoute extends Model
{
    use HasFactory;

    protected $table = 'busroutes';
    protected $primarykey = 'bus_no';
    public $timestamps = true;

    protected $fillable = [
        'bus_no',
        'route_name',
    ];

    public function students()
    {
        return $this->hasMany(Student::class, 'bus_no', 'bus_no');
    }

    public function incharge()
    {
        // return $this->hasMany(Incharge::class, 'bus_no', 'bus_no');
        return $this->belongsTo(Incharge::class, 'bus_no', 'bus_no'); //admin
    }
}
