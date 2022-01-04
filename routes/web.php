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

Route::get("/", function () {
    return view("homepage");
});


Route::get("/listalbum", function () {
    $data = [
        'album' => array(
            [
                'title' => 'Microchip Emozionale',
                'artist' =>  'Subsonica',
               
            ],
            [
                'title' => 'Amo',
                'artist' =>  'Bring me the horizon',
                
            ],
            [
                'title' => 'Dubstep Don',
                'artist' =>  'Various Artists',
            ],
        )
    ];
    return view("listalbum", $data);
})->name("listalbum");