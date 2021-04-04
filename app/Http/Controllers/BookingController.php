<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\Room;
use App\Payment;
use App\Customer;
use Redirect;

use Illuminate\Support\Facades\Input;

class BookingController extends Controller
{
    public function book(){
        return view('ui.pages.booking');
    }
    public function bookingroom(){
        $rooms = Room::all();
       
        return view('ui.pages.bookingroom', compact('rooms'));
    }

    public function cancel(){
        return view('ui.pages.cancel');
    }

    public function payment(){
        return view('ui.pages.payment');
    }
    public function proceed_booking($id){
      $room = Room::find($id);
       return view('ui.pages.proceed_booking')->with('room', $room);
    }

    public function pay(Request $request){       
    
      

        $request->validate([
            
            'customer_id' => 'required',           
            'journal_no' => 'required',
            'image' => 'image|mimes:jpg,png,jpeg',
        ]);

        if ($request->hasFile('image')) {
             $image = $request->image;
            $image->move('uploads', $image->getClientOriginalName());
        }              
        
        if ($customer_id = Customer::where('id','=', Input::get('customer_id'))->first()){
   
            Payment::create([    
        
            'customer_id' => $customer_id->id,    
            'journal_no' =>$request->journal_no,
            'image' => $request->image->getClientOriginalName(),
        ]);   
        return Redirect::route('home')->with('success', 'booked! check your status');
    }
}

    public function store(Request $request){
    

        //form validation
        $request->validate([
            'customer_id' => 'required',
            'room_id' => 'required',
            'coming'=> 'required',
            'going' => 'required',
            'checkin' => 'required',
            'checkout' => 'required',
            'people_no' => 'required',
            'duration' => 'required',
            // 'journal_no' => 'required',
            // 'image' => 'image|mimes:jpg,png,jpeg',
        ]);

        // if ($request->hasFile('image')) {
        //     $image = $request->image;
        //     $image->move('uploads', $image->getClientOriginalName());
        // }
       
       if ($customer_id = Customer::where('id','=', Input::get('customer_id'))->first()){
   
        Booking::create([       

            'customer_id' => $customer_id->id,
            'room_id' => $request->room_id,
            'coming' => $request->coming,
            'going' => $request->going,
            'checkin' => $request->checkin,
            'checkout' => $request->checkout,
            'people_no' =>$request->people_no,
            'duration' => $request->duration,
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            // 'journal_no' =>$request->people_no,
            // 'image' => $request->image->getClientOriginalName(),
        ]);
        return Redirect::route('payment')->with('success', 'Proceed to payment');

        } //if

        else{
         return back()->with('success', 'You are not registered');
        }
    }
}
