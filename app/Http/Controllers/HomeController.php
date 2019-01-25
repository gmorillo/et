<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Condition;
use App\Type;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $residenteInvitado = Condition::get();
        $tattooPiercing = Type::get();
        return view('home',compact('residenteInvitado', 'tattooPiercing'));
    }
}
