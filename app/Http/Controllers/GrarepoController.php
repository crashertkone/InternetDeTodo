<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Charts;
use DB;

class GrarepoController extends Controller
{
    	public function index()
    {
    	
		$chart = Charts::realtime(route('data'), 1000, 'bar', 'highcharts')
    			 ->Responsive(false)
    			
    			->Width(0);

			return view('graficarepor', ['chart'=>$chart]);
}
}