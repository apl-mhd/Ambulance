<?php

use Illuminate\Database\Seeder;

class AmbulanceInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         factory(App\Models\AmbulanceInfo::class, 2000)->create();
    }
}
