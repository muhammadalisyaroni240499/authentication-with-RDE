<?php
namespace App\Http\Middleware;

use App\Models\User;
use App\Models\CoverImage;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\embeddmessage;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ekstraksimessage;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SendLinkController;
use App\Http\Controllers\TestController;
use App\Mail\SendLinktoEmail;
use Illuminate\Http\Request;


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
    return view('login',[
        "tittle_page" => "Masuk",
    ]);
});

Route::get('/register', function(){
    return view('register',[
        "coverimage" => CoverImage::all(),
        "tittle_page" => "Daftar",
    ]);
})->middleware('guest');

Route::post('/register',[RegisterController::class, 'registration']);

Route::get('/login', function(){
    return view('login', [
        "tittle_page" => "Masuk"
    ]);
})->name('login')->middleware('guest');

Route::post('/login',[LoginController::class, 'index']);
Route::post('/logout',[LoginController::class, 'logout']);
Route::post('/dashboard/download',[DashboardController::class, 'download'])->middleware('auth');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/embedd',[embeddmessage::class, 'index']);
Route::get('/ekstrak',[ekstraksimessage::class, 'index']);

Route::resource('/dashboard/user', UserController::class);

Route::get('edit/{user}', function(User $user,Request $request){
    if (! $request->hasValidSignature()) {
        abort(401);
    }
    
    return view('dashboard.edit', [
        'coverimage' => CoverImage::all(),
        'user' => $user,
        'tittle_page' => "Edit | $user->namalengkap" 
    ]);
})->name('edit');

Route::get('recovery/{user}', function(User $user, Request $request){
    if (! $request->hasValidSignature()) {
        abort(401);
    }

    return view('recovery_ci', [
        'coverimage' => CoverImage::all(),
        'user' => $user,
        'tittle_page' => "Recovery"
    ]);
})->name('recovery');

Route::get('/dashboard/test', function(){
    return view('dashboard.test', [
        'coverimage' => CoverImage::all(),
        'tittle_page' => "Uji Cover Image",
    ]);
});

Route::post('/dashboard/test/fidelity', [TestController::class, 'fidelity']);
Route::post('/dashboard/test/capacity', [TestController::class, 'capacity']);

Route::post('/sendLink', [SendLinkController::class, 'SendLink']);
Route::get('/updatecoverimage', function(){
    return view("updatecoverimage", [
        "tittle_page" => "Update Cover Image"
    ]);
});

Route::post('/updatecoverimage', [UserController::class, 'updatecoverimage']);