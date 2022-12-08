<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::all();
        return view('admin.feedbacks.index',compact('feedbacks'));
    }
    public function store(Request $request)
    {
        // dd($request);
        
        $data = $request->validate([
            
            'user_id' => 'nullable',
            'name' => 'required|regex:/(^[A-Za-z ]+$)+/',
            'phone' => ['integer', 'digits:10'],
            'email' => 'required',
            'message' => 'required|regex:/(^[A-Za-z ]+$)+/',
         
        ]);
            $data['user_id'] = Auth::user()->id;     
            Feedback::create([
            'user_id' => $data['user_id'],
            'name' => $data['name'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'message' => $data['message'],
            ]);
        Alert::success('Thanks for your feedback','We will contact you soon');
        return redirect()->back();
    }
    public function delete(Request $request)
    {
        $s = Feedback::find($request->dataid);
        $s->delete();
        Alert::success('Feedback Deleted');
        return redirect(route('admin.feedbacks.index'));

    }
}
