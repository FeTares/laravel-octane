<?php

use App\Services\Example;
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

Route::get('/test', function () {
    Example::$values[] = rand(4, 2);

    dd(Example::$values);
});

Route::get('/', function () {
    return view('welcome');
});
