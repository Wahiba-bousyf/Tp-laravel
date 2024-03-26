<?php

use App\Models\Userr;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnnonceController;

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
Route::get('/',[AnnonceController::class,'index'])->name('home');
Route::get('/show{id}',[AnnonceController::class,'show'])->name('show');
Route::get('/edit{id}',[AnnonceController::class,'edit'])->name('edit');
Route::put('/update{id}',[AnnonceController::class,'update'])->name('update');
Route::delete('/delete{id}',[AnnonceController::class,'delete'])->name('delete');
Route::get('/create',[AnnonceController::class,'create'])->name('create');
Route::post('/store',[AnnonceController::class,'store'])->name('store');






// Route::get('/',[ControllerHome::class,'myfunction'])->name('home');
// Route::get('/post/{id}',[ControllerHome::class,'show'])->name('post.show');
// Route::get('/create/post',[ControllerHome::class,'create'])->name('post.create');
// Route::post('/add/post',[ControllerHome::class,'store'])->name('post.store');
// Route::get('/edit/{slag}',[ControllerHome::class,'edit'])->name('edit');
// Route::put('update{slag}',[ControllerHome::class,'update'])->name('update');
// Route::delete('delete{slag}',[ControllerHome::class,'delete'])->name('delete');

// Route::get('/create',[TpController::class,'create'])->name('create');
// Route::post('/store',[TpController::class,'store'])->name('store');
// Route::get('/',[TpController::class,'index'])->name('home');
// Route::get('/show{id}',[TpController::class,'show'])->name('show');
// Route::get('/edit{id}',[TpController::class,'edit'])->name('edit');
// Route::put('/update{id}',[TpController::class,'update'])->name('update');
// Route::delete('/delete{id}',[TpController::class,'delete'])->name('delete');

// Route::get('/eloquent',[EloquentController::class,'index'])->name('eloquent');
// Route::get('/ajouter',[EloquentController::class,'ajouter'])->name('ajouter');
// Route::post('/create',[EloquentController::class,'create'])->name('create');

// Route::get('/',function(){
//     $userr=Userr::find(1);
//     echo $userr->profile->nom;
// });
// exercice1
// Route::get('/',[Exercice1Controller::class,'index'])->name('home');
// Route::get('/create',[Exercice1Controller::class,'create'])->name('create');
// Route::post('/store',[Exercice1Controller::class,'store'])->name('store');
// Route::get('/more/{id}',[Exercice1Controller::class,'more'])->name('more');
// Route::get('/edit/{id}',[Exercice1Controller::class,'edit'])->name('edit');
// Route::put('/update/{id}',[Exercice1Controller::class,'update'])->name('update');
// Route::delete('/delete/{id}',[Exercice1Controller::class,'delete'])->name('delete');





