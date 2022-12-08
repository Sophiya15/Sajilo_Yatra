<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use GrahamCampbell\ResultType\Success;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::all();
        return view('admin.brands.index',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
        $data = $request->validate([
            'name' => 'required',
            'photopath'=>['required','image','mimes:png,jpg'],
            ]);
            if($request->has('photopath')){
                $fname= Str::random(20);
                $fexe= $request->file('photopath')->extension();
                $fpath="$fname.$fexe";
                $request->file('photopath')->storeAs('public/brands',$fpath);
                $data['photopath']='brands/'.$fpath;
            }
            Brand::create($data);
            Alert::success('Brand added Successfully');
            return redirect(route('admin.brands.index'));

        }
        catch (\Exception $e) {
            Alert::error('Brand cannot be created','Already added');
            return redirect(route('admin.brands.index'));
            // return response()->json(['error' => 'You cannot delete Type with related data!'], 401);
        }

        
                // return redirect(route('admin.brands.index'))->with('success', 'Brand Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        return view('admin.brands.show',compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        return view('admin.brands.edit',compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        $data = $request->validate([
            'name' => 'required',
        ]);

        $brand->update($data);
        Alert::success('Brand Updated Successfully');
        return redirect(route('admin.brands.index'))->with('success', 'Brand Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        //
    }

    public function delete(Request $request)
    {
        $s = Brand::find($request->dataid);
        Storage::delete('public/'.$s->photopath);
        // $s->delete();
        // if($s){
        // Alert::success('Brand deleted Successfully');
        // return redirect(route('admin.brands.index'));
        // }
        // else{
        //     return redirect(route('admin.brands.index'));
        // }
        try {
            $s->delete();
        } catch (\Exception $e) {
            Alert::error('Brand cannot be deleted','Related to other data');
            return redirect(route('admin.brands.index'));
            // return response()->json(['error' => 'You cannot delete Type with related data!'], 401);
        }
        Alert::success('Brand deleted Successfully');
           return redirect(route('admin.brands.index'));
        return response()->json(['message' => "Type deleted Sucessfully"]);


        // {
        //     $s = Brand::find($request->dataid);
        //     Storage::delete('public/'.$s->photopath);
        //    if($s->delete()){
        //    Alert::success('Brand deleted Successfully');
        //    return redirect(route('admin.brands.index'));
        // }
        // else{
        //     Alert::error('Brand Cannot be deleted');
        //    return redirect(route('admin.brands.index')); 
        // }


        // return redirect(route('admin.brands.index'))->with('success', 'Brand Deleted Sucessfully');

    }
}
