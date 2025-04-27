<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerData extends Model
{
    use HasFactory;
    protected $table = 'bus_type';
    protected $fillable = ['id_customer','full_name','email','phone_number','address',];
    protected $dates = ['created_at', 'update_at'];
}
