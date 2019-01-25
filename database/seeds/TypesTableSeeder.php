<?php

use Illuminate\Database\Seeder;
use App\Type;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		Type::create([
	        'type' => 'Tattoo'
	    ]);
	    Type::create([
	        'type' => 'Piercing'
	    ]);
    }
}
