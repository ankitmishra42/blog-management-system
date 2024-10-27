<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


// User Controller Part
Route::get('/blogs', [UserController::class, 'Blogs']);

// Admin Controller Part
Route::match(['get','post'],'/blog/create',[AdminController::class, "createBlogs"]);
Route::any('/blog/view',[AdminController::class, "viewBlogs"]);
Route::put('/blog/update',[AdminController::class, "updateBlogs"]);
Route::delete('/blog/delete/{{id}}',[AdminController::class, "deleteBlogs"]);
