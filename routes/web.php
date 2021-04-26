<?php
use App\Models\Save;
use App\Models\State;
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

Route::get('/play', function () {
    $states=State::all();
    return view('play',['states'=>$states]);
});


Route::get('/saves', [App\Http\Controllers\SaveController::class, 'index']);
Route::post('/saves', [App\Http\Controllers\SaveController::class, 'store']);
Route::get('/load/{state}', [App\Http\Controllers\SaveController::class, 'edit']);
Route::put('/saves/{save}', [App\Http\Controllers\SaveController::class, 'update']);
Route::get('/saves/{save}', [App\Http\Controllers\SaveController::class, 'show']);
Route::delete('/saves/{save}', [App\Http\Controllers\SaveController::class, 'destroy']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
