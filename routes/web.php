<?php

use App\Http\Controllers\utilisateurController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/utilisateur', function () {
    return view('utilisateur.index');
});

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/fornisseur', function () {
    return view('fornisseur.index');
});

Route::get('/Categorie', function () {
    return view('Categories');
});
Route::get('/Products', function () {
    return view('Produits.index');
});
Route::get('/profile', function () {
    return view('Profile.index');
});

Route::resource('/utilisateurs', utilisateurController::class);
