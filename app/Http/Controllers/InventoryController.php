<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inventory;


class InventoryController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'quantity' => 'required',
            'condition' => 'required',
            
        ]);

       Inventory::create([
            'name' => $request->name,
            'quantity' => $request->quantity,
            'condition' => $request->condition,
            
        ]);

        return back()->with('success', 'Inventory Successfully Registered!');
    }
}
