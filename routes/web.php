<?php

use App\Http\Controllers\AgenceRegionalController;
use App\Http\Controllers\DemandeurController;
use App\Http\Controllers\GuichetController;
use App\Http\Controllers\ProgrammeController;
use App\Http\Controllers\UserController;
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
Route::middleware('auth')->group(function () {
// agence
Route::get("/parametres/agences/new", [AgenceRegionalController::class, "create"])->name("agence.create");
Route::get("/parametres/agences/list", [AgenceRegionalController::class, "list"])->name("agence.list");
Route::post("/parametres/agences", [AgenceRegionalController::class, "store"])->name("agence.store");

// guichet
Route::get("/parametres/guichets/new", [GuichetController::class, "create"])->name("guichet.create");
Route::get("/parametres/guichets/list", [GuichetController::class, "list"])->name("guichet.list");
Route::post("/parametres/guichets", [GuichetController::class, "store"])->name("guichet.store");

// demandeurs
Route::get("/demandeurs/new", [DemandeurController::class, "create"])->name("demandeurs.create");
Route::get("/demandeurs/list", [DemandeurController::class, "list"])->name("demandeurs.list");
Route::post("/demandeurs", [DemandeurController::class, "store"])->name("demandeurs.store");

// programme agr
Route::get("/programmes/agr/new", [ProgrammeController::class, "create"])->name("agr.create");
Route::get("/programmes/agr/list", [ProgrammeController::class, "list"])->name("agr.list");
Route::post("/programmes", [ProgrammeController::class, "store"])->name("agr.store");


});

// utilisateur
Route::middleware('administrateur')->group(function () {
    Route::get("/parametres/users/new", [UserController::class, "create"])->name("users.create");
    Route::get("/parametres/users/list", [UserController::class, "list"])->name("users.list");
    Route::post("/parametres/users", [UserController::class, "store"])->name("users.store");

});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
