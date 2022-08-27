<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Backend\BookController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ReaderController;
use App\Http\Controllers\Backend\BorrowController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ForgotController;


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




Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('/login-check', [LoginController::class, 'loginCheck'])->name('loginCheck');
Route::get('/registration', [LoginController::class, 'registration'])->name('registration');
Route::post('/do-registration', [LoginController::class, 'doRegistration'])->name('doRegistration');
Route::get('/forgotpass', [ForgotController::class, 'forgotdo'])->name('forgotpass');
Route::get('/forgotpassdo', [ForgotController::class, 'forgotpass'])->name('forgotpassdo');
Route::post('/forgotPassword', [ForgotController::class, 'forgotPassword'])->name('forgotPassword');


Route::group(['middleware'=>['auth','CheckAdmin'],'prefix'=>'admin'],function(){


Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/dashboard',[DashboardController::class,'viewDashboard'])->name('dashboard');
Route::get('/dashboard/adminadd',[DashboardController::class,'adminadd'])->name('admin.add');


Route::get('/about',[AboutUsController::class,'index'])->name('about');

//  categories operation
Route::get('/categories',[CategoryController::class,'list'])->name('category.list');
Route::get('/category/create',[CategoryController::class,'create'])->name('category.create');
Route::post('/category/store',[CategoryController::class,'store'])->name('category.store');
Route::get('/category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
Route::post('/category/update/{id}',[CategoryController::class,'update'])->name('category.update');


//  book operation
Route::get('/books',[BookController::class,'list'])->name('book.list');
Route::get('/book/form',[BookController::class,'form'])->name('form.book');
Route::post('/book/store',[BookController::class,'store'])->name('store.book');
Route::get('/book/view/{id}',[BookController::class,'views'])->name('view.book');
Route::get('/book/delete/{id}',[BookController::class,'delete'])->name('delete.book');
Route::get('/book/edit/{id}',[BookController::class,'edit'])->name('book.edit');
Route::post('/book/update/{id}',[BookController::class,'update'])->name('book.update');
Route::get('/book_search',[BookController::class,'search'])->name('search.book');

//  reader operation
Route::get('/readers',[ReaderController::class,'list'])->name('reader.list');
Route::get('/reader/form',[ReaderController::class,'form'])->name('form.reader');
Route::post('/reader/store',[ReaderController::class,'store'])->name('store.reader');
Route::get('/reader/view/{id}',[ReaderController::class,'views'])->name('view.reader');
Route::get('/reader/delete/{id}',[ReaderController::class,'delete'])->name('delete.reader');
Route::get('/reader/edit/{id}',[ReaderController::class,'edit'])->name('edit.reader');
Route::post('/reader/update/{id}',[ReaderController::class,'update'])->name('update.reader');
//reader report
Route::get('/reader/report',[ReaderController::class,'readerReport'])->name('reader.report');

//  borrow operation
Route::get('/borrow',[BorrowController::class,'list'])->name('borrow.list');
Route::get('/borrow/form',[BorrowController::class,'form'])->name('form.borrow');
Route::post('/borrow/store',[BorrowController::class,'store'])->name('store.borrow');
Route::get('/borrow/delete/{id}',[BorrowController::class,'delete'])->name('delete.borrow');
Route::get('/search',[BorrowController::class,'search'])->name('search');
Route::get('/borrow/report',[BorrowController::class,'borrowReport'])->name('borrow.report');

// reader 


});



// password 
  
Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');