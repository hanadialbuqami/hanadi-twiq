<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PhoneAppController extends Controller
{
    public function welcome()
    {
        $phone=[
  
            ['Type' =>'Iphone 14','Price'=>3500 ,'Color'=>'Black'],
            ['Type' =>'Samsung','Price'=>2500 ,'Color'=>'White'],
            ['Type' =>'Huwaui','Price'=>1000 ,'Color'=>'Gold']
             
           ];
        
    return view('welcome',["ph"=>$phone]);

        }

 public function GetPhoneData(){
    $phone=DB::table('products')
    ->get();
    return view('showphone',["ph"=>$phone]);
 }


 public function GetPhoneDataid($id){
    $phone=DB::table('products')->find($id);
    return view('checkout',["ph"=>$phone]);
 }

 

 public function Getinvoic(Request $request){
   
    echo($request->name);
    echo"<br>";
    echo($request->address);
    echo"<br>";
    echo($request->email);

   

    

 }
}