<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Brand;
use App\Models\Review;
use App\Models\Booking;
use App\Models\Vehicle;
use App\Models\Slideshow;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class Frontendcontroller extends Controller
{
    public function home()
    {
        $slideshows=Slideshow::all();
        $vehicles = Vehicle::latest()->take(8)->get();
        
        return view('welcome',compact('slideshows','vehicles'));
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        return view('services');
    }

    public function cars()
    {
        $vehicles = Vehicle::paginate(15);
        return view('cars',compact('vehicles'));
    }

    public function contact()
    {
        return view('contact');
    }
   
    public function faq()
    {
        return view('faq');
    }

    public function productview($id)
    {
        $vehicle = Vehicle::findOrFail($id);
        $review = Review::where('vehicle_id',$vehicle->id)->get();
        return view('productview',compact('vehicle','review'));
    }

    // public function productview($id)
    // {
    //     $vehicle = Vehicle::findOrFail($id);
    //     $bookings = Booking::where('vehicle_id',$vehicle->id)->where('status','pending')->get();
    //     // dd($bookings);
    //     $isShow = true;

        
    //     foreach ($bookings as $booking) {
           
            
            

    //         if(  Carbon::today()->format('Y-m-d')  >=$booking->start_date && Carbon::today()->format('Y-m-d') <= $booking->end_date){
    //             $isShow = false;

    //         }


    //     }
    //     // $vehicle=Vehicle::where('vehicle_id',$vehicle->id)->get();
    //     $vehicle = Vehicle::with('ReviewData')->find($id);
    //     return view('productview',compact('vehicle','isShow'));
    // }
    
    public function search(Request $request)
 
    {
        $search = $request->input('search');
    
        if($search == ""){
            return view('search');
        }
        $vehicles = Vehicle::where('name', 'LIKE', "%{$search}%")->get();
        return view('search',compact('vehicles'));
    }
    public function dashboard(){
        $bookings = Booking::all()->count();
        $brands = Brand::all()->count();
        $vehicles = Vehicle::all()->count();
        $users = User::all()->count();
        $cbookings = Booking::where('status','Confirmed')->paginate(20);
        $cobookings = Booking::where('status','Completed')->paginate(20);
        $cabookings = Booking::where('status','Canceled')->paginate(20);
        return view('dashboard',compact('bookings','brands','vehicles','users','cbookings','cobookings','cabookings'));
    }
    public function profile(){
        return view('profile');
    }

    public function booking()
        {
         $bookings = Booking::paginate(15);
        return view('admin.bookings.index',compact('bookings'));
        } 

    public function canceled()
    {
        $bookings = Booking::where('status','Canceled')->paginate(20);
        return view('admin.bookings.index',compact('bookings'));
    }
    public function confirmed()
    {
        $bookings = Booking::where('status','Confirmed')->paginate(20);
        return view('admin.bookings.index',compact('bookings'));
    }
    public function completed()
    {
        $bookings = Booking::where('status','Completed')->paginate(20);
        
        return view('admin.bookings.index',compact('bookings'));
    }


    public function cancel($id)
        {
            $bookings = Booking::findOrFail($id);
            $bookings ->status= 'canceled';
            $bookings ->update();
            Alert::success('Booking Status Changed','With Canceled');
            return redirect()->back();
        }
        public function confirm($id)
        {
            $bookings = Booking::findOrFail($id);
            $bookings ->status= 'confirmed';
            $bookings ->update();
            Alert::success('Booking Status Changed','With Confirmed');
            return redirect()->back();
        }
        public function complete($id)
        {
            $bookings = Booking::findOrFail($id);
            $bookings ->status= 'completed';
            $bookings ->update();
            Alert::success('Booking Status Changed','With Completed');
            return redirect()->back()->with('success','Bookings Completed Successfully');
        }


        public function userBooking()
        {
            $user = Auth::user()->id;
            $cobookings = Booking::where('user_id',$user)->where('status','Completed')->get();
            // $cbookings = Booking::where('user_id',$user)->where('status','Confirmed')->orWhere('status','pending')->get();
            $cbookings = Booking::where('user_id',$user)->get();
            $cabookings = Booking::where('user_id',$user)->where('status','Canceled')->get();
            return view('userbookings',compact('user','cobookings','cbookings','cabookings'));
        }


        public function changePassword()
            {
            return view('change-password');
            }

            public function updatePassword(Request $request)
            {
                    # Validation
                    $request->validate([
                        'old_password' => 'required',
                        'new_password' => 'required|confirmed',
                    ]);
            
            
                    #Match The Old Password
                    if(!Hash::check($request->old_password, auth()->user()->password)){
                        Alert::error("Old Password Doesn't match!");
                        return back()->with("error", "Old Password Doesn't match!");
                    }
            
            
                    #Update the new Password
                    User::whereId(auth()->user()->id)->update([
                        'password' => Hash::make($request->new_password)
                    ]);
                    Alert::success('Password updated successfully');
                    return back()->with("status", "Password changed successfully!");
            }
       

            public function profileedit($id)
            {
               
                $user = User::findOrFail($id);
                return view('editprofile',compact('user'));
            }
        
            public function profileupdate(Request $request)
            {
                $data = $request->validate([
                    'id' => 'required',
                    'name' => ['required', 'string', 'max:255'],
                    'email' => ['required', 'string', 'email', 'max:255'],
                    'address' => 'required',
                    'phone' => ['required','digits:10'],
                ]);
        
                $user = User::findOrFail($data['id']);
        
        
                if($request->oldpassword){
                    if(!Hash::check($request->oldpassword, $user->password)){
                        return redirect()->back()->with('error',"Old Password didn't match");
                    }
                    elseif($request->newpassword != $request->cpassword){
                        return redirect()->back()->with('error',"Password didn't match");
                    }
                    elseif($request->newpassword == ""){
                        return redirect()->back()->with('error','Enter new password');
                    }
                    else{
                        $user->name = $data['name'];
                        $user->address = $data['address'];
                        $user->phone = $data['phone'];
                        $user->password = Hash::make($request->newpassword);
                        $user->update();
                        Alert::success('Profile updated successfully');
                        return redirect()->back()->with('success','Profile updated successfully');
                    }
                } else {
                    $user->name = $data['name'];
                    $user->address = $data['address'];
                    $user->phone = $data['phone'];
                    $user->update();
                    return redirect()->back()->with('success','Profile updated successfully');
                }
            }
               
}
