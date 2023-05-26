<?php

use App\Http\Controllers\AgenceRegionalController;
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

Route::get("/parametres/agences/new", [AgenceRegionalController::class, "create"])->name("agence.create");
Route::get("/parametres/agences/list", [AgenceRegionalController::class, "list"])->name("agence.list");
Route::post("/parametres/agences", [AgenceRegionalController::class, "store"])->name("agence.store");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
