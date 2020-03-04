<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\VarDumper;

class CarController extends Controller
{
    protected function handlForm(Request $request, Car $car){
        $request->validate($car->rules);

        $data = $request->except(['_token']);

        $car->fill($data);
        $car->save();

        return redirect()->route('car.show', [$car]);
    }


    public function index(){

        $cars = Car::all();

        VarDumper::dump($cars);

        return view('index', [
            'cars' => $cars
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        return $this->handlForm($request, new Car());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        return view('show', [
            'car' => $car
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        return view('form', [
            'film' => $car,
            'action' => route('car.update', [$car]),
            'method' => 'PUT'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        return $this->handlForm($request, $car);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     */
    public function destroy(Car $car)
    {
        $car->delete();
        return response()->redirectTo('/');
    }
}
