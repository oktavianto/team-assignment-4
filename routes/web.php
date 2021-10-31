<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\VideoController;

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
    return redirect()->route('dashboard');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $data['video'] = \App\Models\Video::orderBy('created_at','desc')->get();
    return Inertia::render('Dashboard', $data);
})->name('dashboard');

Route::prefix('video')->name('video.')->middleware('auth:sanctum')->group(function() {
    Route::get('/', [VideoController::class, 'index'])->name('index');
    Route::get('/watch/{id}', [VideoController::class, 'watch'])->name('watch');
    Route::post('/store', [VideoController::class, 'store'])->name('store');
});