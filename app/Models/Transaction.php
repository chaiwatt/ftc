<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\Schedule;
use App\Helper\DateConversion;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable =[
        'storename',
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
        return $schedule->day1 . ' -'.  $schedule->day1 . ' ' . DateConversion::thaiMonthLong($schedule->month) . ' ' . $schedule->year;
    }

    public function getPaidTimeAttribute()
    {
        return Carbon::parse($this->paid_at)->setTimezone('Asia/Bangkok')->format('Y-m-d H:i:s');
    }
}
