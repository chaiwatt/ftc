<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SchedulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schedules')->insert([
            [
                'day1' => 22,
                'day2' => 23,
                'month' => 12,
                'year' => 2022
            ],
            [
                'day1' => 27,
                'day2' => 28,
                'month' => 12,
                'year' => 2022
            ],
            [
                'day1' => 5,
                'day2' => 6,
                'month' => 1,
                'year' => 2023
            ],
            [
                'day1' => 7,
                'day2' => 8,
                'month' => 1,
                'year' => 2023
            ],
            [
                'day1' => 10,
                'day2' => 11,
                'month' => 1,
                'year' => 2023
            ],
            [
                'day1' => 12,
                'day2' => 13,
                'month' => 1,
                'year' => 2023
            ],
            [
                'day1' => 14,
                'day2' => 15,
                'month' => 1,
                'year' => 2023
            ],
            [
                'day1' => 17,
                'day2' => 18,
                'month' => 1,
                'year' => 2023
            ],
            [
                'day1' => 19,
                'day2' => 20,
                'month' => 1,
                'year' => 2023
            ],
            [
                'day1' => 21,
                'day2' => 22,
                'month' => 1,
                'year' => 2023
            ],
            [
                'day1' => 24,
                'day2' => 25,
                'month' => 1,
                'year' => 2023
            ],
            [
                'day1' => 26,
                'day2' => 27,
                'month' => 1,
                'year' => 2023
            ],
            [
                'day1' => 28,
                'day2' => 29,
                'month' => 1,
                'year' => 2023
            ],
            [
                'day1' => 30,
                'day2' => 31,
                'month' => 1,
                'year' => 2023
            ],
            [
                'day1' => 2,
                'day2' => 3,
                'month' => 2,
                'year' => 2023
            ],
            [
                'day1' => 4,
                'day2' => 5,
                'month' => 2,
                'year' => 2023
            ],
            [
                'day1' => 7,
                'day2' => 8,
                'month' => 2,
                'year' => 2023
            ],
            [
                'day1' => 9,
                'day2' => 10,
                'month' => 2,
                'year' => 2023
            ],
            [
                'day1' => 11,
                'day2' => 12,
                'month' => 2,
                'year' => 2023
            ],
            [
                'day1' => 14,
                'day2' => 15,
                'month' => 2,
                'year' => 2023
            ],
            [
                'day1' => 16,
                'day2' => 17,
                'month' => 2,
                'year' => 2023
            ],
            [
                'day1' => 18,
                'day2' => 19,
                'month' => 2,
                'year' => 2023
            ],
            [
                'day1' => 21,
                'day2' => 22,
                'month' => 2,
                'year' => 2023
            ],
            [
                'day1' => 23,
                'day2' => 24,
                'month' => 2,
                'year' => 2023
            ],
            [
                'day1' => 25,
                'day2' => 26,
                'month' => 2,
                'year' => 2023
            ],
            [
                'day1' => 27,
                'day2' => 28,
                'month' => 2,
                'year' => 2023
            ]
        ]);
    }
}


