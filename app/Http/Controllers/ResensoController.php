<?php

namespace App\Http\Controllers;

use App\date;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class ResensoController extends Controller
{
     public function index()
    {
        $dates = Date::all();
        return view("products.senreport",["dates" => $dates]);


    }


public function pdf()
    {        
        /**
         * toma en cuenta que para ver los mismos 
         * datos debemos hacer la misma consulta
        **/
        $dates = Date::all(); 

        $pdf = PDF::loadView('products.senreport', compact('dates'));

        return $pdf->download('listado.pdf');
    }
}
