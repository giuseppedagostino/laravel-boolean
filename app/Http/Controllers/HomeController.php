<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class HomeController extends Controller
{
    public function index() {
        // prima query - select * from movies
        // accedo in maniera statica al suo metodo statico
        // public static function all
        $cars = Car::all();
        dd($cars);

        return view('home');
    }
}
