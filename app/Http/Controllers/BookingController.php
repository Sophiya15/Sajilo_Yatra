<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Booking;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $bookings = Booking::paginate(15);
        return view('admin.bookings.index',compact('bookings'));
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

        $data = $request->validate([
            'user_id' => 'nullable',
            'name' => 'required|regex:/(^[A-Za-z ]+$)+/',
            'address' => 'required|regex:/(^[A-Za-z ]+$)+/',
            'phone' => ['integer', 'digits:10'],
            'from' => 'required|regex:/(^[A-Za-z ]+$)+/',
            'to' => 'required|regex:/(^[A-Za-z ]+$)+/',
            'start_date' => 'required|after_or_equal:today',
            'end_date' => 'required|after_or_equal:start_date',
            'status' => 'nullable',
            'vehicle_id' => 'required',
        ]);
        // $parsedStartDate = Carbon::parse($request->start_date)->toDateString();
        // $parsedEndDate = Carbon::parse($request->end_date)->toDateString();
        // return $checkRental = Booking::whereDate('start_date', '<>', $parsedStartDate)
        //                                 ->whereDate('end_date', '<>', $parsedEndDate)
        //                                 ->where('status','confirmed')
        //                                 ->first();
                // ->whereNotBetween($parsedStartDate, ['start_date', 'end_date'])
                // ->whereNotBetween($parsedEndDate, ['start_date', 'end_date'])
                                   
            //  $checkRentalstatus = Booking::whereDate('start_date', '>=', $parsedStartDate)
            //                             ->whereDate('end_date', '<=', $parsedEndDate)
            //                             ->orWhere(function($middleClause) use ($parsedStartDate,$parsedEndDate) {
            //                                 $middleClause
            //                                     ->where('start_date','<=',$parsedStartDate)
            //                                     ->where('end_date','>=', $parsedEndDate);
            //                             })
            //                         ->where('status','confirmed')
            //                         ->first();

       
  $parsedStartDate = Carbon::parse($request->start_date)->toDateString();
  $parsedEndDate = Carbon::parse($request->end_date)->toDateString();
  $vehicle_id = $request->input('vehicle_id');    
          $found= Booking::query()->where('vehicle_id',$vehicle_id)
        ->where(function($exits) use ($parsedStartDate,$parsedEndDate)
        {
            $exits->where(function ($findConflict) use ($parsedStartDate,$parsedEndDate) {
                $findConflict->whereBetween('start_date',[$parsedStartDate,$parsedEndDate])
                    ->orWhereBetween('end_date',[$parsedStartDate,$parsedEndDate]);
            })
            ->orWhere(function($middleClause) use ($parsedStartDate,$parsedEndDate) {
                $middleClause
                    ->where('start_date','<=',$parsedEndDate)
                    ->where('end_date','>=',$parsedStartDate);
            });
        })
       ->get();


            if ($found->count()>0) {
                Alert::error('Select other date/vehicle','(Vehicle already booked for that date, Sorry!)');
                 return redirect()->back();

            }
            else{
                $data['user_id'] = Auth::user()->id;
                Booking::create([
                'user_id' => $data['user_id'],
                'name' => $data['name'],
                'address' => $data['address'],
                'phone' => $data['phone'],
                'from' => $data['from'],
                'to' => $data['to'],
                'start_date' => $data['start_date'],
                'end_date' => $data['end_date'],
                'status' => 'pending',
                'vehicle_id' => $data['vehicle_id'],
                ]);
                Alert::success('Booked Successfully','Thank you!');
                return redirect()->back();
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        return view('admin.bookings.show',compact('booking'));
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
  
}
