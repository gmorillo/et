<?php

use Illuminate\Database\Seeder;
use App\Condition;

class ConditionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Condition::create([
	        'condition' => 'Residente'
	    ]);
	    Condition::create([
	        'condition' => 'Invitado'
	    ]);
    }
}
