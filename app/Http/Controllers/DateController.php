<?php

namespace App\Http\Controllers;

use App\date;
use Illuminate\Http\Request;

class DateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dates = Date::all();
        return view("index",["dates" => $dates]);


    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $dates = new Date;
        return view("dates.create",["dates" => $dates]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $dates = new Date;

        $dates->datos = $request->datos;
       
        $dates->dato1 = $request->dato1;
        



        if($dates->save()){
            return redirect("/dates");
        }else{
            return view("dates.create", ["dates" => $dates]);
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\date  $date
     * @return \Illuminate\Http\Response
     */
    public function show(date $date)
    {
         $date = Date::find($id); 

        return view('dates.show',['dates' => $date]); 
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\date  $date
     * @return \Illuminate\Http\Response
     */
    public function edit(date $date)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\date  $date
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, date $date)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\date  $date
     * @return \Illuminate\Http\Response
     */
    public function destroy(date $date)
    {
        //
    }
}
