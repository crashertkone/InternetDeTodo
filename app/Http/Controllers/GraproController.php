<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Charts;
use DB;

class GraproController extends Controller
{
    public function index()
    {



    	$day_chart = Charts::database(Product::all(), 'bar' , 'material')
    	->responsive(false)
    	->width(0)
    	->groupByDay(10);

    	
    		$products = Product::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))->get();
        $chart = Charts::database($products, 'bar', 'highcharts')
			      ->title("Product Details")
			      ->elementLabel("Total Products")
			      ->dimensions(1000, 500)
			      ->responsive(true)
			      ->groupByMonth(date('Y'), true);





    	$me_chart = Charts::database(Product::all(), 'bar' , 'material')
    	->responsive(false)
    	->width(0)
    	->groupByYear(10);


    	


    	$pie_chart = Charts::database(Product::all(), 'bar' , 'material')
    	->responsive(false)
    	->width(0)
    	->groupBy('name');




    	



    	


			


		

        return view('graficapro',compact('chart', 'pie_chart', 'me_chart', 'day_chart'));
    }


}
