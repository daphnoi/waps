<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProjectController;
use App\Models\Item;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    Route::prefix('projects')->name('projects.')->group(function () {
        Route::get('/', [ProjectController::class, 'index'])->name('index');
        Route::post('store/', [ProjectController::class, 'store'])->name('store');
        Route::delete('delete/{id}', [ProjectController::class,'destroy'])->name('delete');
        Route::put('update/{project}', [ProjectController::class,'update'])->name('update');
        
    });

    Route::prefix('items')->name('items.')->group(function () {
        Route::get('/{item}', [ItemController::class, 'item_index'])->name('item');
        Route::get('/{project}', [ItemController::class, 'index'])->name('index');
        Route::post('store/', [ItemController::class, 'store'])->name('store');
        Route::delete('delete/{id}', [ItemController::class,'destroy'])->name('delete');
        Route::put('update/{item}', [ItemController::class,'update'])->name('update');
    });

    
});
