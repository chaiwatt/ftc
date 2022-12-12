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
        'name',
        'lastname',
        'amount',
        'phone',
        'email',
        'address',
        'participant',
        'schedule_id',
        'company',
        'vatnumber',
        'promocode',
        'source_id',
        'charge_id',
        'status',
        'discount'
    ];

    public function getTrainingDateAttribute()
    {
        $schedule = Schedule::find($this->schedule_id);
        // dd($schedule);
        return $schedule->day1 . ' -'.  $schedule->day1 . ' ' . DateConversion::thaiMonthLong($schedule->month) . ' ' . $schedule->year;
    }
}
