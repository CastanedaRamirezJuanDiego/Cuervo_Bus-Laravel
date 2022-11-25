<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bus;
use App\Models\Center;
use App\Models\Cuatrimeste;
use App\Models\Detail;
use App\Models\Direction;
use App\Models\Driver;
use App\Models\Trajectory;
use App\Models\Truck_stop;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Cuatrimeste::factory(40)->create();
        Direction::factory(40)->create();
        Center::factory(40)->create();
        Truck_stop::factory(40)->create();
        Trajectory::factory(40)->create();
        User::factory(40)->create();
        Driver::factory(40)->create();
        Bus::factory(40)->create();
        Detail::factory(40)->create();
    }
}
