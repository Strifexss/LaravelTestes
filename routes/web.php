<?php

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

    $data = [
        ["nome" => "Matheus", "idade" => 20],
        ["nome" => "Henrique", "idade" => 21]
    ];
    return view('welcome', ['data' => $data]);
});
