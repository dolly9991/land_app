<?php


use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandRightsController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/redirects', [HomeController::class, 'dashboards']);

Route::post('/landRights',[LandRightsController::class,'uploadForm']);
Route::get('/landRights', [LandRightsController::class, 'index'])->name('landRights');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
