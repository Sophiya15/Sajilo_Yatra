<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use App\Models\Driver;
use App\Models\Review;
use App\Models\Vehicle;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = Vehicle::all();
        return view('admin.vehicles.index',compact('vehicles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::all();
        $drivers = Driver::all();
        return view('admin.vehicles.create',compact('brands','drivers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required','string'],
            'price' => ['required','numeric'],
            'seater' => ['required','numeric'],
            'brand_id' => ['required','numeric'],
            'plate' => ['required','string'],
            'driver' => ['required','string'], 
            'isAvailable' => ['required','boolean'],
            'extra' => ['required','string'],
            'photopath1' => ['required','image','mimes:png,jpg'],
            'photopath2' => ['nullable','image','mimes:png,jpg'],
            'photopath3' => ['nullable','image','mimes:png,jpg'],
            'model' => ['required','string'],
            'fuelType' => ['required','string'] ,
        ]);

        if($request->has('photopath1')){
            $fname = Str::random(20);
            $fexe = $request->file('photopath1')->extension();
            $fpath = "$fname.$fexe";

            $request->file('photopath1')->storeAs('public/vehicles', $fpath);

            $data['photopath1'] = 'vehicles/'.$fpath;
            
        }

        if($request->has('photopath2')){
            $fname = Str::random(20);
            $fexe = $request->file('photopath2')->extension();
            $fpath = "$fname.$fexe";

            $request->file('photopath2')->storeAs('public/vehicles', $fpath);

            $data['photopath2'] = 'vehicles/'.$fpath;
            
        }

        if($request->has('photopath3')){
            $fname = Str::random(20);
            $fexe = $request->file('photopath3')->extension();
            $fpath = "$fname.$fexe";

            $request->file('photopath3')->storeAs('public/vehicles', $fpath);

            $data['photopath3'] = 'vehicles/'.$fpath;
            
        }

        Vehicle::create($data);
        Alert::success('Vehicle Added Successfully');
        return redirect(route('admin.vehicles.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicle $vehicle)
    {
        return view('admin.vehicles.show',compact('vehicle')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehicle $vehicle)
    {
        $brands = Brand::all();
        $drivers = Driver::all();
        return view('admin.vehicles.edit',compact('vehicle','brands','drivers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        $data = $request->validate([
            'name' => ['required','string'],
            'seater' => ['required','numeric'],
            'brand_id' => ['required','numeric'],
            'price' => ['required','numeric'],
            'plate' => ['required','string'],
            'driver' => ['required','string'], 
            'isAvailable' => ['required','boolean'],
            'extra' => ['required','string'],
            'photopath1' => ['nullable','image','mimes:png,jpg'],
            'photopath2' => ['nullable','image','mimes:png,jpg'],
            'photopath3' => ['nullable','image','mimes:png,jpg'],
            'model' => ['required','string'],
            'fuelType' => ['required','string'] ,
        ]);

        if($request->has('photopath1')){
            $fname = Str::random(20);
            $fexe = $request->file('photopath1')->extension();
            $fpath = "$fname.$fexe";

            $request->file('photopath1')->storeAs('public/vehicles', $fpath);

            if($vehicle->photopath1){
                Storage::delete('public/'. $vehicle->photopath1);
            }

            $data['photopath1'] = 'vehicles/'.$fpath;
            
        }

        if($request->has('photopath2')){
            $fname = Str::random(20);
            $fexe = $request->file('photopath2')->extension();
            $fpath = "$fname.$fexe";

            $request->file('photopath2')->storeAs('public/vehicles', $fpath);

            if($vehicle->photopath2){
                Storage::delete('public/'. $vehicle->photopath2);
            }

            $data['photopath2'] = 'vehicles/'.$fpath;
            
        }

        if($request->has('photopath3')){
            $fname = Str::random(20);
            $fexe = $request->file('photopath3')->extension();
            $fpath = "$fname.$fexe";

            $request->file('photopath3')->storeAs('public/vehicles', $fpath);

            if($vehicle->photopath3){
                Storage::delete('public/'. $vehicle->photopath3);
            }

            $data['photopath3'] = 'vehicles/'.$fpath;
            
        }

        $vehicle->update($data);
        Alert::success('Vehicle Detail Updated');
        return redirect(route('admin.vehicles.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicle $vehicle)
    {
        //
    }

    public function delete(Request $request)
    {
        $s = Vehicle::find($request->dataid);
        Storage::delete('public/'.$s->photopath1);
        Storage::delete('public/'.$s->photopath2);
        Storage::delete('public/'.$s->photopath3);
        $s->delete();
        Alert::success('Vehicle Deleted Successfully');
        return redirect(route('admin.vehicles.index'));
        // return redirect(route('admin.vehicles.index'))->with('success', 'Vehicle Deleted Sucessfully');

    }

  
    
    

}
