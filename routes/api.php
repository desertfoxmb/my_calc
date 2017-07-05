<?php

use Illuminate\Http\Request;
use App\Calculator;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('calc/add/x/{x}/y/{y}', function ($x, $y){
    return response()->json(Calculator::sum($x,$y),200);
});

Route::get('calc/diff/x/{x}/y/{y}', function ($x, $y){
    return response()->json(Calculator::diff($x,$y),200);
});

Route::get('calc/mult/x/{x}/y/{y}', function ($x, $y){
    return response()->json(Calculator::mult($x,$y),200);
});

Route::get('calc/div/x/{x}/y/{y}', function ($x, $y){
    return response()->json(Calculator::div($x,$y),200);
});

Route::get('calc/multdiv/x/{x}/y/{y}/z/{z}', function ($x, $y, $z) {
   $t = Calculator::mult($x,$y);
   return response()->json(Calculator::div($t,$z),200);
});