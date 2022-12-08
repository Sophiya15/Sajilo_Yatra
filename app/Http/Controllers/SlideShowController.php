<?php

namespace App\Http\Controllers;

use App\Models\SlideShow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
class SlideShowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slideshows=Slideshow::all();
        return view('admin.slideshows.index',compact('slideshows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slideshows.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
            $data=$request->validate([
                'title' => 'nullable',
                'photopath'=>['required','image','mimes:png,jpg'],
            ]);
            if($request->has('photopath')){
                $fname= Str::random(20);
                $fexe= $request->file('photopath')->extension();
                $fpath="$fname.$fexe";
                $request->file('photopath')->storeAs('public/slideshows',$fpath);
                $data['photopath']='slideshows/'.$fpath;
            }
            Slideshow::create($data);
            Alert::success('Added Successfully');
            return redirect(route('admin.slideshows.index'));
    
    
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SlideShow  $slideShow
     * @return \Illuminate\Http\Response
     */
    public function show(SlideShow $slideShow)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SlideShow  $slideShow
     * @return \Illuminate\Http\Response
     */
    public function edit(SlideShow $slideShow)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SlideShow  $slideShow
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SlideShow $slideShow)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SlideShow  $slideShow
     * @return \Illuminate\Http\Response
     */
    public function destroy(SlideShow $slideShow)
    {
        //
    }
    public function delete(Request $request)
    {
        $s = Slideshow::find($request->dataid);
        Storage::delete('public/'.$s->photopath);
        $s->delete();
        Alert::success('Slideshow Deleted');
        return redirect(route('admin.slideshows.index'));

    }
}
