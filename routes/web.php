<?php

use Illuminate\Support\Facades\Route;

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
    return view('client.index');
});

Route::get('/SCHEDULE_AN_APPOINTMENT',function(){
 return view('client.shedule_an_appointment'); 
})->name('shedule');

Route::get('/SCHEDULE_AN_APPOINTMENT/STEP1',function(){
    return view('client.step1'); 
   })->name('step1');

   Route::get('/SCHEDULE_AN_APPOINTMENT/STEP2',function(){
    return view('client.step2'); 
   })->name('step2');

   Route::get('/SCHEDULE_AN_APPOINTMENT/STEP3',function(){
    return view('client.step3'); 
   })->name('step3');

   Route::get('/Contact',function(){
    return view('client.contact'); 
   })->name('contact');


   Route::group(['prefix'=>"SCHENGEN-VISA"],function(){
       Route::get('/',function(){
           return view('client.SCHENGEN-VISA.index');
       })->name('SCHENGEN-VISA');
   });

   Route::group(['prefix'=>"NATIONAL-VISA"],function(){
    Route::get('/',function(){
        return view('client.NATIONAL-VISA.index');
    })->name('NATIONAL-VISA');
});