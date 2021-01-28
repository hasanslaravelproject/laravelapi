<?php

namespace Database\Seeders;

use App\Models\SeatPlan;
use Illuminate\Database\Seeder;

class SeatPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SeatPlan::factory()
            ->count(5)
            ->create();
    }
}
