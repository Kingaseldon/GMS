<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Session;
class WelcomeController extends Controller
{
   public function home()
   {
      return view('ui.layouts.main');  
   }
    public function aboutus()
    {
       return view('ui.pages.about');
    }
    public function rooms()
    {
      $rooms= Room::all();
       return view('ui.pages.rooms', compact('rooms'));
    }
    public function terms()
    {
       return view('ui.pages.terms');
    }
   
 
}
