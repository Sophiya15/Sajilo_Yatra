<?php

namespace App\Http\Controllers\Admin;

use App\Models\Driver;
use App\Models\Vehicle;
use App\Models\Reporting;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class ReportingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $reportings = Reporting::all();
        return view('admin.reportings.index',compact('reportings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $drivers = Driver::all();
        $vehicles = Vehicle::all();
        return view('admin.reportings.create',compact('drivers','vehicles'));
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
            'vehicle_name' => 'required',
            'date' => 'required',
            'driver_name' => 'required',
            'driver_email' => 'required',
            'problem'=> 'required',
            'solution'=> 'required',
             'photopath0'=>['image','mimes:png,jpg'],
                ]);
                if($request->has('photopath0')){
                    $fname= Str::random(20);
                    $fexe= $request->file('photopath0')->extension();
                    $fpath="$fname.$fexe";
                    $request->file('photopath0')->storeAs('public/reportings',$fpath);
                    $data['photopath0']='reportings/'.$fpath;
                }
                    Reporting::create($data);
                    Alert::success('Report added Successfully');
                    return redirect(route('admin.reportings.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Reporting $reporting)
    {
        
        return view('admin.reportings.show',compact('reporting')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Reporting $reporting)
    {
  
         $vehicles = Vehicle::all();
        $drivers = Driver::all();
        return view('admin.reportings.edit',compact('reporting','vehicles','drivers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reporting $reporting)
    {
        $data = $request->validate([
        'vehicle_name' => ['required','string'],
        'driver_name' => ['required','string'],
        'date' => ['required','string'],
        'driver_email' => ['required','string'],
        'problem'=> ['required','string'],
        'solution'=> ['required','string'],
         'photopath0'=>['nullable','image','mimes:png,jpg'],
        ]);
       
        
            $reporting->update($data);
            Alert::success('Report updated Successfully');
            return redirect(route('admin.reportings.index'))->with('success', 'Report Updated Successfully');

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
    public function delete(Request $request)
    {
        $s = Reporting::find($request->dataid);
        Storage::delete('public/'.$s->photopath0);
        $s->delete();
        Alert::success('Ride Report deleted Successfully');
        return redirect(route('admin.reportings.index'));
        // return redirect(route('admin.drivers.index'))->with('success', 'driver Deleted Sucessfully');

    }
}
