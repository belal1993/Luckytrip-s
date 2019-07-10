<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ _airport;
use DB;

class AirportController extends Controller
{
    public function GetAirport (Request $Request , $id) {

    	$get_by_id = _airport::where('id',$id)->get();

    	return $get_by_id;
    }

    public function postairport (Request $Request) {
    	$post_airport = new  _airport;
    		$post_airport->name = $Request->input('name');
    		$post_airport->IATA_Code = $Request->input('IATA_Code');
    		$post_airport->Latitude =  $Request->input('Latitude');
    		$post_airport->Longitude = $Request->input('Longitude');
    		$post_airport->Description = $Request->input('Description');
    		$post_airport->Terms_and_Conditions = $Request->input('Terms_and_Conditions');
    		$post_airport->save();
    	 return  $post_airport;
    	}

    	public function updateairport (Request $Request, $id)
		{
    			 $update = _airport::where('id',$id)->first();
  					$update->name = $Request->input('name');
    				$update->IATA_Code = $Request->input('IATA_Code');
    				$update->Latitude =  $Request->input('Latitude');
    				$update->Longitude = $Request->input('Longitude');
    				$update->Description = $Request->input('Description');
    				$update->Terms_and_Conditions = $Request->input('Terms_and_Conditions');
    				$update->save();

  					return  $update;
		}

    	public function deleteairport (Request $Request ,$id) {
    		 $id = $Request->id;
       			 $delete= _airport::where('id',$id);
       			 $delete->delete();
       		 return ('Deleted');

    	}

    	public function GetAirportName (Request $Request , $name) {

    		$get_by_name = _airport::where('name',$name)->get();
    		return $get_by_name;
    	}
};
