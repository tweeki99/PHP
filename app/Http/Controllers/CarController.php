<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\VarDumper;

class CarController extends Controller
{
    public function index(){

        $cars = Car::all();

        VarDumper::dump($cars);

        return view('index', [
            'cars' => $cars
        ]);
    }
}
