<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    //
    public function index(){
        //$cursos=Curso::all();
        $cursos=Curso::orderBy('id','desc')->paginate(10);
        return view('cursos.index', compact('cursos'));
    }

    public function create(){
        return view('cursos.create');
    }

    public function show(Curso $curso){

        return view('cursos.show', compact('curso'));
    }

    public function store(Request $request){
        //return $request->all();

        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'category'=>'required'
        ]);
        $curso = new Curso();
        $curso->name = filter_var($request->name, FILTER_SANITIZE_STRING);
        $curso->description = filter_var($request->description, FILTER_SANITIZE_STRING);
        $curso->category = filter_var($request->category, FILTER_SANITIZE_STRING);
        $curso->save();
        return redirect()->route('cursos.show',$curso);
    }

    public function edit(Curso $curso){
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso){
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'category'=>'required'
        ]);
        $curso->name = filter_var($request->name, FILTER_SANITIZE_STRING);
        $curso->description = filter_var($request->description, FILTER_SANITIZE_STRING);
        $curso->category = filter_var($request->category, FILTER_SANITIZE_STRING);
        $curso->save();
        return redirect()->route('cursos.show',$curso);
    }

}
