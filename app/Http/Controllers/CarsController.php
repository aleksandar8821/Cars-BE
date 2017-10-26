<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Car;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $take = request()->query('take', Car::get()->count());
        $skip = request()->query('skip', 0);

        $cars = Car::skip($skip)->take($take)->get();

        return $cars;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(Car::VALIDATION);
        $car->mark = $request->input('mark');
        $car->model = $request->input('model');
        $car->year = $request->input('year');
        $car->max_speed = $request->input('maxSpeed');
        $car->is_automatic = $request->input('isAutomatic');
        $car->engine = $request->input('engine');
        $car->number_of_doors = $request->input('numberOfDoors');
        $car->save();
        
        return $car;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Car::find($id);
        return $car;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(Car::VALIDATION);
        $car = Car::find($id);
        $car->mark = $request->input('mark');
        $car->model = $request->input('model');
        $car->year = $request->input('year');
        $car->max_speed = $request->input('maxSpeed');
        $car->is_automatic = $request->input('isAutomatic');
        $car->engine = $request->input('engine');
        $car->number_of_doors = $request->input('numberOfDoors');
        $car->update();

        return $car;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Car::find($id);
        $car->delete();
        return $car;
    }
}
