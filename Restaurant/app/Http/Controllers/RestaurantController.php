<?php

namespace App\Http\Controllers;


use App\Models\Restaurants;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = Restaurants::get();
        //return view('restaurants.index',compact('reviews'));
        return view('restaurants.index',compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('restaurants.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:10',
            'adress'  => 'required|max:5',
            'zipCode'  =>'required' ,
            'town'  =>'required' ,
            'country'  =>'required' ,
            'description'  =>'required' ,
            'review' => 'required',
        ]);


        Restaurants::create([
            'name' => $request['name'],
            'adress'  => $request['adress'],
            'zipCode'  => $request['zipCode'],
            'town'  => $request['town'],
            'country'  => $request['country'],
            'description'  => $request['description'],
            'review' => $request['review']
        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reviews = Restaurants::findOrFail($id);

        return view('restaurants.show',compact('reviews'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reviews = Restaurants::findOrFail($id);

        return view('restaurants.edit',compact('reviews'));
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
        $reviews = Restaurants::findOrFail($id);

        $reviews->name = $request['name'];
        $reviews->adress  = $request['adress'];
        $reviews->zipCode  = $request['zipCode'];
        $reviews->town  = $request['town'];
        $reviews->country  = $request['country'];
        $reviews->description  = $request['description'];
        $reviews->review = $request['review'];

        $reviews->save();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reviews= Restaurants::findOrfail($id);
        $reviews->delete();

        return redirect('/');
    }
}
