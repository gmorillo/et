<?php

use Illuminate\Database\Seeder;
use App\Style;

class StylesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Style::create([
	        'style' => 'Black Work'
	    ]);
	    Style::create([
	        'style' => 'Brush & Sketch'
	    ]);
	    Style::create([
	        'style' => 'Cover Up'
	    ]);
	    Style::create([
	        'style' => 'Japones'
	    ]);
	    Style::create([
	        'style' => 'Lettering'
	    ]);
	    Style::create([
	        'style' => 'Ornamental'
	    ]);
	    Style::create([
	        'style' => 'Tradicional'
	    ]);
	    Style::create([
	        'style' => 'Neo Tradicional'
	    ]);
	    Style::create([
	        'style' => 'Puntillismo'
	    ]);
	    Style::create([
	        'style' => 'Realismo'
	    ]);
	    Style::create([
	        'style' => 'Trash Polka'
	    ]);
	    Style::create([
	        'style' => 'Watercolor'
	    ]);
    }
}
