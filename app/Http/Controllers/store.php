<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\upload;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class store extends Controller
{

	public function test(Request $request){
	    if($request->ajax()){
	        $productID = $_GET['productID'];
			return "xin chào ".$productID;
	    }
	}
	
}
