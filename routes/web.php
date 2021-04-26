<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Responsable\MyOwnClass;

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

Route::resource('posts', PostController::class)->only('index', 'create', 'store', 'show');

Route::get('register', [RegisterController::class, 'index']);
Route::post('register', [RegisterController::class, 'store'])->name('register');

Route::get('login', [LoginController::class, 'index']);
Route::post('login', [LoginController::class, 'store'])->name('login');

// Route::get('{post:title}', [PostController::class, 'showByTitle']);

Route::get('responsable', fn() => new MyOwnClass);

Route::prefix('admin')->as('admin.')->group(function (){
    Route::get('test', fn() => 'ok')->name('teste');
});



function teste($numberOfCalls)
{
    if($numberOfCalls === 2) {
        return 'OK';
    }

    throw new \Exception;
}

Route::get('helpers/retry-test', function(){
    $result = retry(3, function($tries){
        return teste($tries);
    }, 5);
    return $result;
});

//https://laravel.com/docs/8.x/helpers#method-rescue
Route::get('helpers/rescue-test', function(){
    $foundUser = rescue(function () {
        throw new \Exception;
    }, null);

    dd($foundUser);
});


