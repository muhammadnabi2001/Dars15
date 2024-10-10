<?php
use App\Routes\Route;
use App\Controllers\CategoryController;
Route::get('/',[CategoryController::class,'index']);
Route::get('/test',[CategoryController::class,'test']);
Route::get('/index',[CategoryController::class,'index']);
Route::get('/create',[CategoryController::class,'create']);
Route::get('/update',[CategoryController::class,'update']);
Route::get('/update',[CategoryController::class,'update']);
Route::post('/update',[CategoryController::class,'update']);
Route::post('/search',[CategoryController::class,'search']);
Route::get('/search',[CategoryController::class,'search']);
Route::get('/create',[CategoryController::class,'create']);
Route::post('/create',[CategoryController::class,'create']);
Route::get('/delete',[CategoryController::class,'delete']);
Route::post('/delete',[CategoryController::class,'delete']);
?>