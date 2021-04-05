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
            'location' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            
        ]);

        // Upload the image
        if ($request->hasFile('image')) {
        $image = $request->image;
        $image->move('uploads', $image->getClientOriginalName());
        }

       Inventory::create([
            'name' => $request->name,
            'quantity' => $request->quantity,
            'condition' => $request->condition,
            'location' => $request->location,
            'image' => $request->image->getClientOriginalName(),
            
        ]);

        return back()->with('success', 'Inventory Successfully Registered!');
    }
}
