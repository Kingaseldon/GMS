<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    public function store(Request $request){

        //form validation
       $request->validate([
            'cid' => 'required',
            'name' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'customer_type' => 'required',
            'email' => 'required',
        ]);

        Customer::create([
            'id' => $request->cid,
            'employee_id' => $request->employee_id,
            'name' => $request->name,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'customer_type' =>$request->customer_type,
            'email' => $request->email,
        ]);

        return back()->with('success', 'Customer Successfully Registered!');
    }
}
