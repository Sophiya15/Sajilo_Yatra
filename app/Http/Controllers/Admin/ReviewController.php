<?php

namespace App\Http\Controllers\Admin;

use App\Models\Review;
use App\Models\Booking;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\BookingController;
use Dflydev\DotAccessData\Data;
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = Review::all();
        return view('admin.reviews.index',compact('reviews'));
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
        //
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
        $s = Review::find($request->dataid);
        $s->delete();
        Alert::success('Reviews deleted');
        return redirect(route('admin.reviews.index'));
        // return redirect(route('admin.reviews.index'))->with('success', 'Brand Deleted Sucessfully');

    }

    public function review(Request $request){
        $vehicle_id = $request->input('vehicle_id');
        $name = $request->input('name');
        $email = $request->input('email');
        $rating = $request->input('rating');
        $comment = $request->input('comment');
        $vehicle_check = Vehicle::where('id',$vehicle_id)->where('isAvailable','1')->first();
        if($vehicle_check){
          $verified_booking = Booking::where('bookings.user_id', Auth::id())->where('status','completed')->where('bookings.vehicle_id',$vehicle_id)
            ->get();  

            if($verified_booking->count()>0){
                    Review::create([
                                        'user_id' => Auth::id(),
                                        'vehicle_id' => $vehicle_id,
                                        'name' => $name,
                                        'email' => $email,
                                        'rating' =>$rating,
                                        'comment'=> $comment,
                                     
                                    ]);  
                                 Alert::success('Reviews has been submitted','Thank You!');
                                 return redirect()->back()->with('flash_msg_success','Your review has been submitted Successfully,');
                          }  
                          else{
                            Alert::error('Reviews cannot be submitted','(To give review you have to complete the ride first!)');
                                    return redirect()->back()->with('flash_msg_success','Your review has been submitted Successfully,');
                                }
                        
                }

        //     if($verified_booking->count()>0){
                
        //         $existing_rating = Review::where('user_id',Auth::id())->where('vehicle_id',$vehicle_id)->first();
        //         if($existing_rating){
        //             $existing_rating->rating = $rating;
        //             $existing_rating->update();
        //         }
        //          else{
        //             Review::create([
        //                 'user_id' => Auth::id(),
        //                 'vehicle_id' => $vehicle_id,
        //                 'name' => $name,
        //                 'email' => $email,
        //                 'rating' =>$rating,
        //                 'comment'=> $comment,
                     
        //             ]);
        //          }   
        //          Alert::success('Reviews has been submitted','Thank You!');
        //          return redirect()->back()->with('flash_msg_success','Your review has been submitted Successfully,');
        //          }
        //        else{
            
        //                         Alert::error('You are not eligible');
        //                         return redirect()->back()->with('flash_msg_success','Your review hasnot been submitted');
        //                     }   
        // }
        // else{
            
        //     Alert::error('link broken');
        //     return redirect()->back()->with('flash_msg_success','Your review hasnot been submitted');
        //  }   
    //     $booking = Booking::all();
    //     foreach($booking as $bookings){
    //         if($booking->status == 'completed'){
    //             Review::create([
    //                 'user_id' => Auth::id(),
    //                 'vehicle_id' => $vehicle_id,
    //                 'name' => $name,
    //                 'email' => $email,
    //                 'rating' =>$rating,
    //                 'comment'=> $comment,
                 
    //             ]);
    //             Alert::success('Reviews has been submitted','Thank You!');
    //             return redirect()->back()->with('flash_msg_success','Your review has been submitted Successfully,');
    //     }
       

             
    //     else{
            
    //         Alert::error('You are not eligible');
    //         return redirect()->back()->with('flash_msg_success','Your review hasnot been submitted');
    //     }
    // }
    
    
    }
}
