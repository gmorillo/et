<?php

use Illuminate\Database\Seeder;
use App\Artist;

class ArtistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Artist::create([
	        'status' => 1,
	        'name' => 'Alejandro Josits',
	        'condition_id' => 1,
	        'type_id' => 1,
	    ]);
	    Artist::create([
	        'status' => 1,
	        'name' => 'Anita Fiera',
	        'condition_id' => 1,
	        'type_id' => 1,
	    ]);
	    Artist::create([
	        'status' => 1,
	        'name' => 'Guillermo Inksoul',
	        'condition_id' => 1,
	        'type_id' => 1,
	    ]);
	    Artist::create([
	        'status' => 1,
	        'name' => 'Coy',
	        'condition_id' => 1,
	        'type_id' => 1,
	    ]);
	    Artist::create([
	        'status' => 1,
	        'name' => 'Neylam reyes',
	        'condition_id' => 2,
	        'type_id' => 1,
	    ]);
	    Artist::create([
	        'status' => 1,
	        'name' => 'Cleiton Cassino',
	        'condition_id' => 2,
	        'type_id' => 1,
	    ]);
	    Artist::create([
	        'status' => 1,
	        'name' => 'Kike',
	        'condition_id' => 2,
	        'type_id' => 1,
	    ]);
	    Artist::create([
	        'status' => 1,
	        'name' => 'Fauno',
	        'condition_id' => 1,
	        'type_id' => 2,
	    ]);
    }
}
