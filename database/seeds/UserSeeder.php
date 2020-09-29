<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for ($i=0; $i < 3; $i++) {
        DB::table('users')->insert([
           'nom' => Str::random(5),
           'prenom' => Str::random(5),
           'psoeudo' => Str::random(5),
           'email' => Str::random(10).'@gmail.com',
           'password' => Hash::make('password'),
           'date_naissance' => date("y-m-d"),
           'forfait_id' => rand(1, 3),
       ]);
      }

    }
}
