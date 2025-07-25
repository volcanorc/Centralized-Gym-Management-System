<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RejectedBooking extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'date',
        'time',
    ];
}