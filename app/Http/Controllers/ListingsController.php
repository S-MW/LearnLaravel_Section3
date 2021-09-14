<?php

namespace App\Http\Controllers;

use App\Models\Listings;
use Dotenv\Validator;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class ListingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate(
        [
            'name' => 'required',
            'address'=> 'required',
            'website' => 'required',
            'email' => 'required',
            'bio' => 'required',
            'phone' => 'required',
        ]);
        $validate['user_id'] = $request->user()->id;

        Listings::create($validate);
        return redirect()->route('dashboard')->with('success','Listing Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 
        $listings = Listings::with('user')->where('id',$id)->first();
        return view('show',compact('listings'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $listing = Listings::find($id);
        return view('edit', compact('listing'));
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
        $validate = $request->validate(
            [
                'name' => 'required',
                'address'=> 'required',
                'website' => 'required',
                'email' => 'required',
                'bio' => 'required',
                'phone' => 'required',
            ]);
            $validate['user_id'] = $request->user()->id;
    
            $updateListing =  Listings::find($id);
            $updateListing->update($validate);
            return redirect()->route('dashboard')->with('success','Listing Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $listing = Listings::find($id);
        $listing->delete();
        return back()->with('success','Lstings Deleted');
    }
}
