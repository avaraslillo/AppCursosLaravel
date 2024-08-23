<?php

use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Mail\ContactanosMailAble;
use Illuminate\Support\Facades\Mail;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', HomeController::class)->name('home');



//Route::get('cursos',[CursoController::class,'index']);

//Route::get('cursos/create',[CursoController::class,'create']);

//Route::get('cursos/{curso}', [CursoController::class,'show']);


/*Route::controller(CursoController::class)->group(function () {
    Route::get('cursos','index')->name('cursos.index');
    Route::get('cursos/create','create')->name('cursos.create');
    Route::get('cursos/{curso}', 'show')->name('cursos.show');
});

Route::post('cursos', [CursoController::class, 'store'])->name('cursos.store');

Route::get('cursos/{curso}/edit',[CursoController::class,'edit'])->name('cursos.edit');

Route::put('cursos/{curso}',[CursoController::class,'update'])->name('cursos.update');

Route::delete('cursos/{curso}',[CursoController::class,'destroy'])->name('cursos.destroy');
*/

Route::resource('cursos', CursoController::class);

Route::view("nosotros", "nosotros")->name("nosotros");

/*Route::get("contactanos", function(){
    $correo = new ContactanosMailAble;
    Mail::to("correo@gmail.com")->send($correo);
    return "Correo enviado";
})->name("contactanos.index");*/


Route::get('contactanos',[ContactanosController::class,'index'])->name('contactanos.index');

Route::post('contactanos',[ContactanosController::class,'store'])->name('contactanos.store');
