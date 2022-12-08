<?php

namespace App\Http\Controllers\Admin;

use App\Models\Driver;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $drivers = Driver::all();
        return view('admin.drivers.index',compact('drivers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.drivers.create');
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
        'name' => 'required',
        'email' => 'required',
        'address' => 'required',
        'age' => 'required',
        'license' => 'required',
        'experience' => 'required',
        'phone' =>  ['integer', 'digits:10'],
        'citizenship' => 'required',
         'photopath0'=>['required','image','mimes:png,jpg'],
            ]);
            if($request->has('photopath0')){
                $fname= Str::random(20);
                $fexe= $request->file('photopath0')->extension();
                $fpath="$fname.$fexe";
                $request->file('photopath0')->storeAs('public/drivers',$fpath);
                $data['photopath0']='drivers/'.$fpath;
            }
                Driver::create($data);
                Alert::success('Driver added Successfully');
                return redirect(route('admin.drivers.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Driver $driver)
    {
        return view('admin.drivers.show',compact('driver'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Driver $driver)
    {
        return view('admin.drivers.edit',compact('driver'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Driver $driver)
    {
        $data = $request->validate([
            'name' => ['required','string'],
            'email' => ['required','string'],
            'address' => ['required','string'],
            'age' => ['required','numeric'],
            'license' => ['required','numeric'],
            'experience' => ['required','numeric'],
            'phone' => ['required','numeric'],
            'citizenship' => ['required','numeric'],
            'photopath0' => ['nullable','image','mimes:png,jpg'],
        ]);

        $driver->update($data);
        Alert::success('Driver Updated Successfully');
        return redirect(route('admin.drivers.index'))->with('success', 'Driver Data Updated Successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $s = Driver::find($request->dataid);
        Storage::delete('public/'.$s->photopath0);
        $s->delete();
        Alert::success('Driver deleted Successfully');
        return redirect(route('admin.drivers.index'));
        // return redirect(route('admin.drivers.index'))->with('success', 'driver Deleted Sucessfully');

    }
}
