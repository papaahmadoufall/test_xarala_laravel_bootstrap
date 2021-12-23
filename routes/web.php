<?php

use App\Http\Controllers\CustumerController;
use Illuminate\Support\Facades\Route;
use Brian2694\Toastr\Facades\Toastr;
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

Route::get('/',function ()
{
    Toastr::success('Bienvenue dans custumerManagement', 'Hello', ["positionClass" => "toast-top-center"]);
    return redirect()->to('list');
});
Route::get('list', [CustumerController::class, 'index'])->name('list');
Route::post('add-custumer', [CustumerController::class, 'store'])->name('add');
Route::get('edit-custumer/{id}', [CustumerController::class, 'edit'])->name('edit');
Route::put('update-custumer/{id}', [CustumerController::class, 'update'])->name('update');
Route::get('delete-custumer/{id}', [CustumerController::class, 'destroy'])->name('destroy');
