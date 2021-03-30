<?php

use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('posts', PostController::class)->only('index', 'create', 'store', 'show');

Route::get('{post:title}', [PostController::class, 'showByTitle']);


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

Route::get('api/retry-test', function(){
    $result = retry(3, function($tries){
        return teste($tries);
    }, 5);
    return $result;
});