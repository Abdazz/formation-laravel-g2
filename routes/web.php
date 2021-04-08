<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\MainController;

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

Route::get("formation", [FormationController::class, "testFormation"])->name("accueil-formation");

Route::post("users", function () {
    return "test";
})->name("list-users");

Route::resource("livres", MainController::class);

Route::get("livres/{livre}/vendre", [MainController::class, "vendre"])->name("livres.vendre");
