<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected $table = 'schedule';
    protected $fillable = ['no_pol', 'bus_code', 'bus_type_id', 'initial_route', 'destination_route', 'departure_time', 'arrival_time', 'seat_total', 'seat_available'];
    protected $dates = ['created_at', 'update_at'];

    public function BusType(){
        return $this->belongsTo(BusType::class, 'bus_type_id', 'id');
    }
}

