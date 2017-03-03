<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EdmundsController extends Controller
{
    $key = env(EDMUNDS_API_KEY);
    public function retrieve ($year , $make) {
    	if ($year == null) $year = '2016';
	    $url = "https://api.edmunds.com/api/vehicle/v2/makes?year={$year}&view=basic&fmt=json&api_key={$key}";
	    $json = file_get_contents($url);
	    $obj = json_decode($json);
	    return response()->json($obj);
    }
}
