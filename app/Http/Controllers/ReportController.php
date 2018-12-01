<?php

namespace App\Http\Controllers;
use App\date;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;


class ReportController extends Controller
{

 public function index()
    {
        $dates = Date::all();
        return view("reports",["dates" => $dates]);


    }



   
  
}
