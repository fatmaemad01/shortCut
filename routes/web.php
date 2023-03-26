<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LinkController;
use App\Models\Link;
use Illuminate\Support\Facades\DB;
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



Route::prefix('dashboard')
    ->as('dashboard.')
    ->group(
        function () {
            Route::get('/', [LinkController::class, 'index'])
                ->name('index');

            Route::get('/create', [LinkController::class, 'create'])
                ->name('create');

            Route::post('/store', [LinkController::class, 'store'])
                ->name('store');

            Route::delete('/{id}', [LinkController::class, 'destroy'])
                ->name('destroy');
        }
    );
    
Route::get('/{short_link}', [LinkController::class, 'redirect'])
    ->name('redirect');


