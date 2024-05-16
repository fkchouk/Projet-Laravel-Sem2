<?php

use App\Http\Controllers\GareController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post("/AddGare",[GareController::class,'AddGare']);
Route::put("/UpdateGare/{id}",[GareController::class,'EditGare']);
Route::delete("/DeleteGare/{id}",[GareController::class,'Delete']);
Route::get("/GetGares",[GareController::class,'GetGares']);
