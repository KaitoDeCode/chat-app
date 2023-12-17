<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function(){return view('auth.register');})->name('signUp.page');
Route::post('/proses-register',[AuthController::class,'register'])->name('signUp');
Route::get('/signIn',function():View{return view('auth.login');})->name('signIn.page');
Route::post('/proses-login',[AuthController::class,'login'])->name('signIn');

Route::middleware(['auth'])->group(function(){
    Route::get('dashboard',function():View{return view('dashboard');})->name('page.dashboard');
    Route::get('add-contact',function():View {return view('add-contact');})->name('page.addContact');
    Route::get('list-contact',[ContactController::class,'index'])->name('page.list-contact');

    Route::get('/data-detail-user/{id}',[ContactController::class,'show']);
    Route::get('/data-message/{id_penerima}',[ChatController::class,'getChat']);

    Route::post('add-contact-to-album',[ContactController::class,'addContact'])->name('proses.addContact');
    Route::post('/edit-profile',[UserController::class,'edit'])->name('proses.editProfile');
    Route::post("send-message",[ChatController::class,'sendMessage']);

    Route::put('edit-message',[ChatController::class,'editMessage']);

    Route::delete('delete-contact/{user_id}',[ContactController::class,'deleteContact'])->name('delete.contact');
});
