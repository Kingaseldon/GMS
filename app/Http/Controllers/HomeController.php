<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\Customer;
use App\Booking;
use App\Payment;
use App\Inventory;
use DB;
use Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboardV1()
    {
        return view('templates.dashboard-v1');
    }
    public function room()
    {
        $rooms= Room::all();
        return view('templates.room', compact('rooms'));
    }
    public function registers()
    {     
     
        $customers= Customer::all();
        return view('templates.registers',compact('customers'));
    }

    public function registersdetail($id)
    {  
        $customers= Customer::all();
        $payments= Payment::all();
        $users =    Booking::where('customer_id',$id)->get();
        if(count($users)) { /* do something */ 

        return view('templates.registersdetail',compact('users','customers','payments'));
        }
     
        else{
            return back()->with('success', 'This user has no booking details');
           }
    }


    public function destroy($id){
        // Delete the order
       $delete = DB::table('bookings')->where('id', $id)->delete();   
    
       // Redirect back
        return Redirect::route('registers')->with('booking deleted');

    }



    public function feedback()
    {
        return view('templates.feedback');
    }
    public function inventory()
    {
        $inventories= Inventory::paginate(15);
        return view('templates.inventory',compact('inventories'));
    }
    public function addroom()
    {
        return view('templates.addroom');
    }
    public function addinventory()
    {
        return view('templates.addinventory');
    }

}
