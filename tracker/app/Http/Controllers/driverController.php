<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Driver;
use Illuminate\Support\Facades\Session;



class driverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = Driver::all();



         return view('driver.driver-index', compact('vehicles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('driver.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $task = new Driver();

        $task->driver_name = $request->input('driver_name');
        $task->driver_cell = $request->input('driver_cell');

        $task->save();

        Session::flash('success', 'Post saved successfully!');

        return redirect('driver'); // Redirect to the appropriate route
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $data = Driver::find($id);

        // print_r($data);

        return view('driver.driver-edit',compact('data'));
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
        //

        $data = Driver::find($id);

       
        $data->driver_name = $request->input('driver_name');
        $data->driver_cell = $request->input('driver_cell');

        $data->update();
        Session::flash('success', 'Driver updated successfully!');
        return redirect('driver');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
