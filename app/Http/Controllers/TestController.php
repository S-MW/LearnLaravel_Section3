<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listings;
use App\Models\user;

use Illuminate\Support\Facades\Auth;


class TestController extends Controller
{
    public function dashboard()
    {
        $listings = user::find(Auth::id())->Listings;
        return view('dashboard' , compact('listings'));
    }

    public function index()
    {
        
        return user::find(Auth::id())->Listings;
    }


}
