<?php

namespace App\Models;

use App\Models\Schedule;
use App\Helper\DateConversion;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable =[
        'storename',
        'amount',
        'source_id',
        'charge_id',
        'status'
    ];

    // public function getTrainingDateAttribute()
    // {
    //     $schedule = Schedule::find($this->schedule_id);
    //     return $schedule->day1 . ' -'.  $schedule->day1 . ' ' . DateConversion::thaiMonthLong($schedule->month) . ' ' . $schedule->year;
    // }
}
