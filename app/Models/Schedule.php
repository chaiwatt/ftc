<?php

namespace App\Models;

use App\Helper\DateConversion;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Schedule extends Model
{
    use HasFactory;


    public function getThaiMonthAttribute()
    {
        return DateConversion::thaiMonth($this->month);
    }
 
}
