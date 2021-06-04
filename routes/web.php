<?php

use App\Http\Controllers\CrudController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [CrudController::class, "showData"]);
Route::get('/crud', [CrudController::class, "crud"]);
Route::get('/Create', [CrudController::class, "Create"]);
Route::post('/Create', [CrudController::class, "save"])->name("save");
Route::get('/delete/{id}', [CrudController::class, "deleteData"])->name("delete.data");
Route::get('/edit/{id}', [CrudController::class, "editData"])->name("edit.data");
Route::post('/update', [CrudController::class, "updateData"])->name("update.data");
