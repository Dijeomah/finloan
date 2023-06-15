<?php

    use App\Http\Controllers\AdminViews\AdminController;
    use App\Http\Controllers\Auth\AuthController;
    use App\Http\Controllers\LocalizationController;
    use App\Http\Controllers\Views\HomeController;
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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/about', [HomeController::class,'about'])->name('about');
Route::get('/services', [HomeController::class,'services'])->name('services');
Route::get('/contact', [HomeController::class,'contact'])->name('contact');
Route::get('/apply-now', [HomeController::class,'apply_now'])->name('apply-now');
Route::post('/apply', [HomeController::class,'loanData']);
Route::post('/loan', [HomeController::class,'loanData']);

Route::get('locale/{lang}', [LocalizationController::class, 'setLang'])->name('locale');


Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('post.login');

//Admin Routes
Route::prefix('admin')->middleware('auth')->group(function(){
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/loans', [AdminController::class, 'loan_list'])->name('loan_list');
});

Route::any('spotify', function(){
	return 'finloan spotify';
});
