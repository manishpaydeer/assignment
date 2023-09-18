<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculateController extends Controller
{
    //
    public function index(Request $request){
        $length = $request->length;
        $height = $request->height;
        $width = $request->width;
        if(strtolower($request->type) == "kg"){
            $volume = ($length*$height*$width)/6000;
            return response()->json([
                "status" => 200,
                "message" => "Success",
                "weight" => number_format($volume , 2), // show data in number format with comma's
                "type"=> $request->type
            ] , 200);
        }
        else if(strtolower($request->type) == "lbs"){
            $volume = ($length*$height*$width)/166;
            return response()->json([
                "status" => 200,
                "message" => "Success",
                "weight" => number_format($volume , 2), // show data in number format with comma's
                "type"=> $request->type
            ] , 200);
        }
        else{
            //there is some tempering with data.Throgh error.
            return response()->json([
                "status" => 403,
                "message" => "Invalid Parameter. ",
            ] , 200);
        }
    }
}
