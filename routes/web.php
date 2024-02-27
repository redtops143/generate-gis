<?php

use App\Http\Controllers\PDFController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $id = '12';
    $data = \App\Models\events::find($id);
    //dd($data.'waaaaaaaaaa');
 return view('pdf',['data' => $data]);
});

//Route::get('pdf',[PDFController::class,'index']);






// Route::get('disneyplus', 'DisneyplusController@create')->name('disneyplus.create');
// Route::post('disneyplus', 'DisneyplusController@store')->name('disneyplus.store');