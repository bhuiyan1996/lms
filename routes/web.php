<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Backend\BookController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ReaderController;
use App\Http\Controllers\Backend\BorrowController;

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

// Route::get('/about', function () {
//     return view('about');
// });

Route::get('/',[DashboardController::class,'index'])->name('dashboard');
Route::get('/dashboard',[DashboardController::class,'viewDashboard'])->name('dashboard');
Route::get('/about',[AboutUsController::class,'index'])->name('about');


Route::get('/categories',[CategoryController::class,'list'])->name('category.list');
Route::get('/category/create',[CategoryController::class,'create'])->name('category.create');
Route::post('/category/store',[CategoryController::class,'store'])->name('category.store');






//  book operation
Route::get('/books',[BookController::class,'list'])->name('book.list');
Route::get('/book/form',[BookController::class,'form'])->name('form.book');
Route::post('/book/store',[BookController::class,'store'])->name('store.book');
Route::get('/book/view/{id}',[BookController::class,'views'])->name('view.book');
Route::get('/book/delete/{id}',[BookController::class,'delete'])->name('delete.book');







//  reader operation
Route::get('/readers',[ReaderController::class,'list'])->name('reader.list');
Route::get('/reader/form',[ReaderController::class,'form'])->name('form.reader');
Route::post('/reader/store',[ReaderController::class,'store'])->name('store.reader');

//  reader operation
Route::get('/borrow',[BorrowController::class,'list'])->name('borrow.list');
Route::get('/borrow/form',[BorrowController::class,'form'])->name('form.borrow');
Route::post('/borrow/store',[BorrowController::class,'store'])->name('store.borrow');