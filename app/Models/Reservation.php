<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $table = 'reservation';
    protected $fillable = ['id',
                           'user_id',
                           'schedule_id',
                           'number_of_seats',
                           'reservation_code', 
                           'reservation_duration', 
                           'payment_date', 
                           'payment', 
                           'set_payment_method', 
                           'payment_status'];
    protected $dates = ['created_at', 'update_at'];

    public function Schedule(){
        return $this->belongsTo(Schedule::class, 'bus_code', 'id');
    }
}
