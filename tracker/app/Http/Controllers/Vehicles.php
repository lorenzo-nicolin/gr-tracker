<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use Illuminate\Support\Facades\Session;

class Vehicles extends Controller
{
    //

    public function index(){

        $vehicles = Vehicle::all();



         return view('vehicle.index', compact('vehicles'));

    }

    public function create(){
        return view('vehicle.create');
    }

    public function store(Request $request){

        // print_r($request);

        $task = new Vehicle();

        $task->name_of_vehile = $request->input('name_of_vehile');
        $task->vehicle_reg = $request->input('vehicle_reg');

        $task->save();

        Session::flash('success', 'Post saved successfully!');

        return redirect('vehicle'); // Redirect to the appropriate route

    }

    public function edit($id)
    {
        //

        // return 'hrer';

        $data = Vehicle::find($id);

        // print_r($data);

        return view('vehicle.edit',compact('data'));

    }

    public function update(Request $request, $id){

        
        $vehicle = Vehicle::find($id);

       
        $vehicle->name_of_vehile = $request->input('name_of_vehile');
        $vehicle->vehicle_reg = $request->input('vehicle_reg');

        $vehicle->update();
        Session::flash('success', 'Vehicle updated successfully!');
        return redirect('vehicle');
        
    }

    public function show(Request $request, $id){
       
      

    }

}
