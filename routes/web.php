<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhoneAppController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/', function () {
    $phone=[
  
        ['Type' =>'Iphone 14','Price'=>3500 ,'Color'=>'Black'],
        ['Type' =>'Samsung','Price'=>2500 ,'Color'=>'White'],
        ['Type' =>'Huwaui','Price'=>1000 ,'Color'=>'Gold']
         ];

         

    return view('welcome',["p"=>$phone]);
})->name("welcome");

Route::get('/getphonedata',[PhoneAppController::class,"GetPhoneData"]);



Route::get('/getwelcome',[PhoneAppController::class,"welcome"]);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/twiq', function () {
    return view('twiq');
})->name("twiq");



Route::get('/test', function () {
    return view('test');
});

Route::get('/phone', function () {
    return view('phone');
});


Route::get('/phonedisplay', function () {
  
    $phone=["type"=>"iphone",
            "price"=>"4000",
            "color"=>"black"
    ];
    return view('phonedetails',$phone);
});

Route::get('/oldphone', function () {
    return view('old.oldphone');
});
 
Route::get('/getphonedata',[PhoneAppController::class,"GetPhoneData" ])->name("getlist");
Route::get('/checkout/{id}',[PhoneAppController::class,"GetPhoneDataid" ])->name("getlistid");
Route::POST('/getinvoice',[PhoneAppController::class,"Getinvoic" ])->name("getinvoice");


