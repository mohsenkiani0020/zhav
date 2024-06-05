<?php

use App\Livewire\Articles\SingleArticle;
use App\Livewire\Auth\ForgotPassword;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\PickName;
use App\Livewire\Auth\Register;
use App\Livewire\Auth\VerifyEmail;
use App\Livewire\HomePage\HomePage;
use App\Livewire\AboutUs\AboutUs;
use App\Livewire\Panels\Admin\AdminPanel;
use App\Livewire\Panels\Manager\ManagerPanel;
use App\Livewire\Panels\User\UserPanel;
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
//Public Route
Route::get('/', HomePage::class)->name('home');
Route::get('/about-us', AboutUs::class)->name('about-us');

Route::get('register', Register::class)->name('register');

Route::get('login', Login::class)->name('login')->middleware('guest');

Route::get('forgot-password', ForgotPassword::class)->name('forgot-password');

Route::get('article/{article}', SingleArticle::class)->name('article');

//Authentication Route
Route::group(['middleware' => ['auth']], function () {

    Route::get('manager-panel', ManagerPanel::class)->name('manager-panel');

    Route::group(['middleware' => ['verified']], function () {
        Route::get('user-panel', AdminPanel::class)->name('admin-panel');
        Route::get('user-panel', UserPanel::class)->name('user-panel');
    });

    Route::get('pick-name', PickName::class)->name('pick-name');

    Route::get('verify-email', VerifyEmail::class)->name('verify-email');

});
