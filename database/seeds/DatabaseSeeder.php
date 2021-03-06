<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(RouteTableSeeder::class);
         $this->call(PointOfInterestTypeTableSeeder::class);
         $this->call(PointOfInterestTableSeeder::class);
    }
}
