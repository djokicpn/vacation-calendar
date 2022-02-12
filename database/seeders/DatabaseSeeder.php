<?php

namespace Database\Seeders;

use App\Models\Absence;
use App\Models\Deputy;
use App\Models\Reason;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(2)->create();
        Reason::create(['name' => 'Vacation', 'symbol' => 'V']);
        Reason::create(['name' => 'Sickness', 'symbol' => 'S']);
        Deputy::create(['name' => 'Deputy 1']);
        Deputy::create(['name' => 'Deputy 2']);
        Deputy::create(['name' => 'Deputy 3']);
        Absence::create(['user_id' => 1, 'reason_id' => 1, 'deputy_id' => 1, 'start' => '2022-02-02', 'end' => '2022-02-05']);
        Absence::create(['user_id' => 1, 'reason_id' => 2, 'deputy_id' => 2, 'start' => '2022-02-06', 'end' => '2022-02-08']);
        Absence::create(['user_id' => 1, 'reason_id' => 1, 'deputy_id' => 3, 'start' => '2022-02-15', 'end' => '2022-02-21']);
        Absence::create(['user_id' => 2, 'reason_id' => 1, 'deputy_id' => 1, 'start' => '2022-01-02', 'end' => '2022-11-21']);
    }
}


