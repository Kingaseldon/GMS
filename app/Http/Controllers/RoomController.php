<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;

class RoomController extends Controller
{
    public function store(Request $request){
        // Validate the form

        $request->validate([
            'roomno' => 'required',
            'roomtype' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'price' => 'required',
            'description' => 'required',
            
        ]);
        
        // Upload the image
        if ($request->hasFile('image')) {
            $image = $request->image;
            $image->move('uploads', $image->getClientOriginalName());
        }

        // Save the data into database
        Room::create([
            'roomno' => $request->roomno,
            'roomtype' => $request->roomtype,
            'image' => $request->image->getClientOriginalName(),
            'price' => $request->price,
            'description' => $request->description,
        ]);

        return back()->with('success', 'Succcessfully Added!');
    }
}
