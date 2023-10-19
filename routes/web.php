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
        [
            'name' => 'John Doe',
            'photo' => 'john.jpg',
            'status' => 'Active',
        ],
        [
            'name' => 'Jane Smith',
            'photo' => 'jane.jpg',
            'status' => 'Away',
        ],
        [
            'name' => 'Alice Johnson',
            'photo' => 'alice.jpg',
            'status' => 'Offline',
        ],
    ];


    return view('welcome', compact('data'));
});
