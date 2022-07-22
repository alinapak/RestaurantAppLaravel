<?php

namespace App\Http\Controllers\ApiControllers;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiRestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Restaurant::all();
        // $rest = Restaurant::with('dishes')->get();
        // return $rest;


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|unique:restaurants'
        ]);
        $rest = new Restaurant();
        $rest->title = $request->input('title');
        $rest->city = $request->input('city');
        $rest->address = $request->input('address');
        $rest->work_time = $request->input('work_time');
        return $rest->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $rest= Restaurant::find($id);
        $rest->title = $request->input('title');
        $rest->city = $request->input('city');
        $rest->address = $request->input('address');
        $rest->work_time = $request->input('work_time');
        return $rest->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return (Restaurant::destroy($id) == 1) ?
            response()->json(['success' => 'success'], 200) :
            response()->json(['error' => 'delete not successful'], 500);
    }
}
