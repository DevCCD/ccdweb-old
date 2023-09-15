<?php

use App\Http\Controllers\Adminlt3;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\Pages;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;





Route::prefix('admin')->group(function () {

Route::resource('categories', CategoryController::class)->names('adminlte3.categories');
Route::resource('users', UserController::class)->names('adminlte3.users');
Route::resource('tags', TagController::class)->names('adminlte3.tags');
Route::resource('roles', RoleController::class)->names('adminlte3.roles');
Route::resource('post', PostController::class)->names('adminlte3.posts');
Route::get('/',[Adminlt3::class,'adminlte3'])->name('adminlte3');
 Route::get('/fotos',[Pages::class,'fotos'])->name('fotos');
 Route::get('/videos',[Pages::class,'videos'])->name('videos');
 
 Route::get('/archivos', [Pages::class, 'archivos'])->name('archivos');

 Route::get('/archivos/{file}', [FileController::class, 'download'])->name('files.download');
 Route::post('/archivos', [FileController::class, 'store'])->name('files.store');
 Route::delete('/archivos/{file}', [FileController::class, 'destroy'])->name('files.destroy');
 Route::get('/calendario', [EventoController::class, 'calendario'])->name('calendario');
  
 Route::get('/calendario/mostrar', [EventoController::class, 'show']);
 Route::post('/calendario/agregar',[EventoController::class, 'storevent']);
    
  Route::post('/calendario/action',[EventoController::class, 'action']);  
 Route::post('/calendario/editar/{id}',[EventoController::class, 'edit']);
  Route::post('/calendario/eliminar/{id}',[EventoController::class, 'eliminar']);
});
    //---------------------------------------------------------


 Route::get('/archivos', [Pages::class, 'archivos'])->name('archivos');

Route::get('/archivos/{file}', [FileController::class, 'download'])->name('files.download');
Route::post('/archivos', [FileController::class, 'store'])->name('files.store');
Route::delete('/archivos/{file}', [FileController::class, 'destroy'])->name('files.destroy');



