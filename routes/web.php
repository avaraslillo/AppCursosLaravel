<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', HomeController::class);

//Route::get('cursos',[CursoController::class,'index']);

//Route::get('cursos/create',[CursoController::class,'create']);

//Route::get('cursos/{curso}', [CursoController::class,'show']);


Route::controller(CursoController::class)->group(function () {
    Route::get('cursos','index')->name('cursos.index');
    Route::get('cursos/create','create')->name('cursos.create');
    Route::get('cursos/{curso}', 'show')->name('cursos.show');
});

Route::post('cursos', [CursoController::class, 'store'])->name('cursos.store');

Route::get('cursos/{curso}/edit',[CursoController::class,'edit'])->name('cursos.edit');

Route::put('cursos/{curso}',[CursoController::class,'update'])->name('cursos.update');