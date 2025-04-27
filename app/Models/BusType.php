<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusType extends Model
{
    use HasFactory;
    protected $table = 'bus_type';
    protected $fillable = ['type','price','facility','seat_capacity',];
    protected $dates = ['created_at', 'update_at'];
}
