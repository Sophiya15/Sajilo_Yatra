<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Booking;

class HistoryController extends Controller
{
    public function myhistory(){
        $user = Auth::user()->id;
        $cobookings = Booking::where('user_id',$user)->where('status','completed')->get();
        $cabookings = Booking::where('user_id',$user)->where('status','canceled')->get();
        return view('history',compact('user','cobookings','cabookings'));

    }
}
