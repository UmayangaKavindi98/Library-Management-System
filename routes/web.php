<?php

use App\Http\Controllers\addMemberController;
use App\Http\Controllers\fileUploadController;
use App\Http\Controllers\timeTableController;
use App\Http\Controllers\userController;
use App\Http\Controllers\userListController;
use App\Http\Controllers\UserOperation;
use App\Http\Controllers\UsersController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/admin', [timeTableController::class, 'index']);
Route::view('/admin','admin/dashboard');
Route::view('/test','admin/test');
Route::view('/listed-Books','admin/pages/listedBook');
Route::view('/damaged-Books','admin/pages/damagedBooks');
Route::view('/issued-Books','admin/pages/issuedBooks');
Route::view('/borrow-req-Books','admin/pages/borrowReq');
Route::view('/addBook','admin/pages/addNewBook');
Route::view('/books-gride','books-gride-view');
Route::view('/staff','staff/StaffProfile');
Route::view('/borrow-Detail','staff/pages/borrowDetail');
Route::view('/extend-Return','staff/pages/extendReturn');
Route::view('/fine-Details','staff/pages/fineDetails');
Route::view('/student','student/StuProfile');
Route::view('/Stu-borrow-Detail','student/pages/StuborrowDetail');
Route::view('/Stu-extend-Return','student/pages/StuextendReturn');
Route::view('/Stu-fine-Details','student/pages/StufineDetails');


