<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Number;
use App\Http\Resources\Number as NumberResource;

class NumberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //recently converted numbers
        $numbers = Number::orderBy('updated_at', 'desc')
                        ->get();

        //return collection of numbers as a resource
        return NumberResource::collection($numbers);

    }

    public function showTop10()
    {
        //show top 10 conversions
        $numbers = Number::orderBy('conv_times', 'desc')
                        ->limit(10)
                        ->get();

        //return collection of numbers as a resource
        return NumberResource::collection($numbers);
        
    }

    // int to roman function
    public function intToRoman($number)
    {
       // storing roman values of digits from 0-9
       // when placed at different places 
       $m = ['', 'M', 'MM', 'MMM']; //thousands
       $c = ['', 'C', 'CC', 'CCC', 'CD', 'D', 'DC', 'DCC', 'DCCC', 'CM']; //hundereds
       $x = ['', 'X', 'XX', 'XXX', 'XL', 'L', 'LX', 'LXX', 'LXXX', 'XC']; //tens
       $i = ['', 'I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX']; //ones

       // converting to roman
       $thousands = $m[$number/1000];
       $hundereds = $c[($number%1000)/100];
       $tens =  $x[($number%100)/10];
       $ones = $i[$number%10];

       // create the roman number
       $roman = $thousands . $hundereds . $tens . $ones;

       // return the roman number
       return $roman;

    }

    public function convert($number)
    {
        //serch in the database for the number
        $numbers = Number::where('conv_number', $number)->exists();

        //test if the number was found in db
        if ($numbers) {
            //update conv_times
            Number::where('conv_number', $number)->increment('conv_times');
            Number::where('conv_number', $number)->update(['updated_at' => now()]);
        }

        else{
            //create new instace
            Number::insert(
                ['conv_number' => $number,
                 'conv_times' => 1,
                 'created_at' => now(),
                 'updated_at' => now()]
            );
        }

        //return the converted number 
        return NumberController::intToRoman($number);

    }
    
}
