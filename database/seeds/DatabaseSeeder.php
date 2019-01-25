<?php

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
         $this->call(ArtistimgsTableSeeder::class);
         $this->call(ArtistsTableSeeder::class);
         $this->call(ConditionsTableSeeder::class);
         $this->call(StyleimgsTableSeeder::class);
         $this->call(StylesTableSeeder::class);
         $this->call(TypesTableSeeder::class);
    }
}
