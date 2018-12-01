<?php

namespace App\Http\Controllers;

use App\Product;
use Charts;
use DB;

class ChartController extends Controller
{
     public function index()
    {
    	$chart = Charts::realtime(route('data'), 1000, 'bar', 'highcharts')
    			 ->Responsive(false)
    			
    			->Width(0);

			
    	 return view('graficapro',['chart' =>$chart]);
    }



}
