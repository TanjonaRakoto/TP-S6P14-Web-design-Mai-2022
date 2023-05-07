<?php

use App\Http\Controllers\Controller;
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
    session()->put('iduser',0) ;
    return view('login');
});

Route::post('/traitementLogin',[Controller::class,'TraitementLogin'])->name('traitementLogin') ;

Route::get('/accueil.html',[Controller::class,'Accueil']);

Route::post('/insererActu',[Controller::class,'InsererActualite'])->name('insererActu') ;

Route::post('/insererAnalyse',[Controller::class,'InsererAnalyse'])->name('insererAnalyse') ;

Route::get('/listeActu.html',[Controller::class,'ListeActualite']);

Route::get('/detailsActu.html/{id_summary}/{id_news}',[Controller::class,'Details'])->name('detailsActu.html');

Route::get('/UpdateActu.html/{id_summary}/{id_news}',[Controller::class,'Update'])->name('UpdateActu.html');

Route::post('/traitementUpdate',[Controller::class,'TraitementUpdate'])->name('traitementUpdate') ;

Route::get('/DeleteActu.html/{id_news}',[Controller::class,'Delete'])->name('DeleteActu.html');

Route::get('/frontOffice.html', [Controller::class,'ListeActualiteFront']) ;

Route::get('/detailsFrontOffice.html/{summary_news}/{id_news}', [Controller::class,'DetailsFrontOffice']) ;

Route::post('/insererCitation',[Controller::class,'InsererCitation'])->name('insererCitation') ;

