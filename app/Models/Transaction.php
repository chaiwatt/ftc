<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'lastname',
        'amount',
        'phone',
        'email',
        'address',
        'participant',
        'trainingdate',
        'company',
        'vatnumber',
        'promocode',
        'source_id',
        'charge_id',
        'status',
        'discount'
    ];
}
