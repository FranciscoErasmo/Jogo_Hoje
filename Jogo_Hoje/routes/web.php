<?php

use App\Http\Livewire\Auth\ForgotPassword;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Auth\ResetPassword;
use App\Http\Livewire\Billing;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\ExampleLaravel\UserManagement;
use App\Http\Livewire\ExampleLaravel\UserInsert;
use App\Http\Livewire\ExampleLaravel\UserProfile;
use App\Http\Livewire\Notifications;
use App\Http\Livewire\Profile;
use App\Http\Livewire\RTL;
use App\Http\Livewire\StaticSignIn;
use App\Http\Livewire\StaticSignUp;
use App\Http\Livewire\Tables;
use App\Http\Livewire\VirtualReality;
use GuzzleHttp\Middleware;
use App\Http\Controllers\EquipeController;

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

Route::get('/', function(){
    return redirect('sign-in');
});

Route::get('forgot-password', ForgotPassword::class)->middleware('guest')->name('password.forgot');
Route::get('reset-password/{id}', ResetPassword::class)->middleware('signed')->name('reset-password');



Route::get('sign-up', Register::class)->middleware('guest')->name('register');
Route::post('criar-conta', [Register::class,'store'])->name('criar-conta');
Route::get('sign-in', Login::class)->middleware('guest')->name('login');
Route::get('user-profile', UserProfile::class)->middleware('auth')->name('user-profile');
Route::post('updateprofile/{id}',[UserProfile::class,'updateprofile'])->name('updateprofile');

Route::get('/equipe', [EquipeController::class, 'index']);

Route::post('/equipe/store', [EquipeController::class,'store'])->middleware('auth')->name('store');


Route::get('user-management', UserManagement::class)->middleware('auth')->name('user-management');
Route::get('userinsert', [UserInsert::class,'userinsert'])->middleware('auth')->name('user-insert');

Route::get('/equipe/{id}', [EquipeController::class,'destroy'])->middleware('auth')->name('equipe.destroy');
Route::get('/equipe', [EquipeController::class,'index'])->name('equipe.index');
Route::get('/equipes/editar/{id}', [EquipeController::class, 'editar'])->middleware('auth')->name('equipes-editar');
Route::post('/equipes/atualizar/{id}', [EquipeController::class, 'atualizar'])->name('equipes.atualizar');



Route::group(['middleware' => 'auth'], function () {
Route::get('dashboard', Dashboard::class)->name('dashboard');
Route::get('billing', Billing::class)->name('billing');
Route::get('profile', Profile::class)->name('profile');
Route::get('tables', Tables::class)->name('tables');
Route::get('notifications', Notifications::class)->name("notifications");
Route::get('virtual-reality', VirtualReality::class)->name('virtual-reality');
Route::get('static-sign-in', StaticSignIn::class)->name('static-sign-in');
Route::get('static-sign-up', StaticSignUp::class)->name('static-sign-up');
Route::get('rtl', RTL::class)->name('rtl');
});