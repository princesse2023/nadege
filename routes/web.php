<?php
use App\Http\Controllers\ConnexionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;


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
Route::get('/bord', function () {
    return view('Admin.tableau');
});
Route::get('/contact', function () {
    return view('User.contact');
});
Route::get('/acc', function () {
    return view('User.accueil2');
});


Route::get('/accueil', [UserController::class, 'home']);

Route::middleware(['auth'])->group(function () {
    Route::get('logout', [ConnexionController::class, 'logout'])->name('logout');

    Route::get('home.admin', [AdminController::class, 'homeAdmin'])->name('home.admin');
    
    Route::get('home.user', [UserController::class, 'homeUser'])->name('home.user');

  
});


Route::get('/', [ConnexionController::class, 'form_login'])->name('login');
Route::get('/log', [ConnexionController::class, 'loge']);
Route::post('loginAction', [ConnexionController::class, 'loginAction'])->name('loginTraitement');

Route::get('reg', [ConnexionController::class, 'inscription']);
Route::get('regist', [ConnexionController::class, 'inscriptionmedecin']);
Route::get('ins', [ConnexionController::class, 'inscriptionrdvs']);
Route::post('registerAction', [ConnexionController::class, 'inscriptionAction'])->name('inscriptTraitement');
Route::post('registeAction', [ConnexionController::class, 'InscriAction'])->name('inscriptmedecinTraitement');
Route::post('rdvAction', [ConnexionController::class, 'rendvAction'])->name('inscriptrdvTraitement');


Route::get('form', [ConnexionController::class, 'formulaire']);
Route::post('formAction', [ConnexionController::class, 'dispo'])->name('dispo');

Route::get('MD', [UserController::class, 'MD']);