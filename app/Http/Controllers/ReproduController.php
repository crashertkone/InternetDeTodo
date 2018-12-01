<?php

namespace App\Http\Controllers;
use App\product;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;


class ReproduController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view("products.proreport",["products" => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function pdf()
    {        
        /**
         * toma en cuenta que para ver los mismos 
         * datos debemos hacer la misma consulta
        **/
        $products = Product::all(); 

        $pdf = PDF::loadView('products.proreport', compact('products'));

        return $pdf->download('listado.pdf');
    }
}
