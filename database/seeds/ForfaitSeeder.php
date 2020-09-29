<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ForfaitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('forfaits')->insert([
          'intitulet' => "Standart",
          'prix' => 1500.00,
          'nbr_seance' => 3,
      ]);
      DB::table('forfaits')->insert([
          'intitulet' => "medium",
          'prix' => 2500.00,
          'nbr_seance' => 5,
      ]);
      DB::table('forfaits')->insert([
          'intitulet' => "prenium",
          'prix' => 3000.00,
          'nbr_seance' => 7,
      ]);
    }
}
