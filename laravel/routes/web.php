<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ManagementUserController;
use App\Http\Middleware\CheckAge;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

// use App\Http\Controllers\DetailProfileController;

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

// Route::get('/home', function () {
//     return view('home');
// });

//Route::get('/user', [ManagementUserController::class, 'index']);
Route::resource('/user', ManagementUserController::class);


Route::group(
    ['namespace' => 'App\Http\Controllers\Frontend'],
    function () {
        Route::resource('/home', HomeController::class);
    }
);

Route::group(
    ['namespace' => 'App\Http\Controllers\Backend'],
    function () {
        Route::resource('/dashboard', DashboardController::class);
    }
);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin/profile', function ($id) {
    //
})->middleware(CheckAge::class);

Route::get('/', function ($id) {
    //
})->middleware('web');

Route::group(['middleware' => ['web']], function () {
    //
});

Route::middleware(['web', 'subcsribed'])->group(function () {
    //
});

Route::put('post/{id}', function ($id) {
    //
})->middleware('role:editor');
