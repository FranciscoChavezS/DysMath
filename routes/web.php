<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PlaylistController;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\BotManController;



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

//Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/video', [App\Http\Controllers\VideoController::class, 'index'])->name('video');

/* Route::get('/playlist', [App\Http\Controllers\PlaylistController::class, 'index'])->name('playlist');
 */
 
//proteger lar páginas que no puedan acceder al menú sin log in con middleware auth
Route::group(['middleware' => 'auth'], function() { 
    
    Route::resource('users', App\Http\Controllers\UserController::class);

    Route::resource('posts', App\Http\Controllers\PostController::class);

    Route::resource('permissions', App\Http\Controllers\PermissionController::class);
    Route::resource('roles', App\Http\Controllers\RoleController::class);
    Route::get('/perfil', [App\Http\Controllers\PerfilController::class, 'index'])->name('perfil');
    Route::post('/perfil', [App\Http\Controllers\PerfilController::class, 'update_avatar'])->name('profile');
    //Route::resource('playlist', App\Http\Controllers\PlaylistController::class);
    //Route::get('/playlist', [App\Http\Controllers\PlaylistController::class, 'index'])->name('playlist');
    
    Route::post('/add-to-playlist/{id}', [PlaylistController::class,'addToCart'])->name('playlist.addToCart');

    Route::get('/juegos', [App\Http\Controllers\GameController::class, 'index'])->name('juegos');
    Route::get('/suma', [App\Http\Controllers\GameController::class, 'suma'])->name('suma');

    Route::match(['get', 'post'], '/botman', [App\Http\Controllers\BotManController::class,"handle"]);
});

//INICIAR SESIÓN CON FACEBOOK RUTAS
Route::get('auth/facebook', [App\Http\Controllers\FaceBookController::class, 'redirectFacebook']);
Route::get('auth/facebook/callback', [App\Http\Controllers\FaceBookController::class, 'callbackFacebook']);
Route::get('/.well-known/pki-validation/{file}', [App\Http\Controllers\PagesController::class, 'getDownload']);


