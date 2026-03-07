<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get ('/',  function () {
        return view('home');
    });

Route::get ('/blog', [BlogController::class, 'index']);
Route::delete('/delete/{id}', [BlogController::class, 'remove']);
Route::post('/create', [BlogController::class, 'create']);
Route::get('/edit/{id}', [BlogController::class, 'edit']);
Route::put('/update/{id}',[BlogController::class, 'update']);
Route::get('/subtitle/{id}',[BlogController::class, 'subtitle']);
// get ดึงข้อมูล
// post สร้างข้อมูล
// delete ลบข้อมูล

Route::get ('/add',  function () {
        return view('add');
    });

Route::get ('/edit',  function () {
        return view('edit');
    });


