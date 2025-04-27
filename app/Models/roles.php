<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class roles extends Model
{
    use HasFactory;
    protected $table = 'bus_type';
    protected $fillable = ['name'];
    protected $dates = ['created_at', 'update_at'];
}

