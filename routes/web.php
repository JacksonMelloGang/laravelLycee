<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClientController;
use App\Http\Controllers\CreateClientController;
use App\Http\Controllers\EditClientController;

use App\Http\Controllers\ProduitController;
//use App\Http\Controllers\CreateProduitController;
//use App\Http\Controllers\EditProduitController;

use App\Http\Controllers\FactureController;
//use App\Http\Controllers\CreateFactureController;
//use App\Http\Controllers\EditFactureController;


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

Route::get('/', function(){
   return redirect('/produits');
});


//Client
Route::get('/client/create', [CreateClientController::class, 'show'])->middleware('auth')->name('createclient');

Route::get('/clients', [ClientController::class, 'show'])->name('clients');

Route::get('/client/{id}', [ClientController::class, 'showid'])->whereNumber('id')->name('client');

Route::get('/client/{id}/edit', [EditClientController::class, 'showid'])->whereNumber('id')->name('editclient');


//Produit
Route::get('/produits', [ProduitController::class, 'show'])->name('produits');

Route::get('/produit/{id}', [ProduitController::class, 'showid'])->name('produit');

Route::get('/produit/create', [ProduitController::class, 'showcreate'])->name('createproduit');

Route::get('/produit/edit/{id}', [ProduitController::class, 'showedit'])->name('editproduit');


//Facture
Route::get('/factures', [FactureController::class, 'show'])->name('factures');

Route::get('/facture/{id}', [FactureController::class, 'showid'])->name('facture');

Route::get('/facture/create', [CreateFactureController::class, 'showcreate'])->name('createfacture');


// form request
Route::post('/client/create', [CreateClientController::class, 'create']);

Route::delete('/client/delete', [DeleteClientController::class, 'show']);

Route::put('/client/edit', [EditClientController::class, 'show']);

Route::post('/produit/create', [ProduitController::class, 'create']);

Route::put('/produit/edit', [ProduitController::class, 'edit']);

Route::delete('/produit/delete', [ProduitController::class, 'delete']);

Route::post('/facture/create', [CreateFactureController::class, 'create']);

Route::delete('/facture/delete', [DeleteFactureController::class, 'show']);

Route::put('/facture/edit', [EditFactureController::class, 'show']);


