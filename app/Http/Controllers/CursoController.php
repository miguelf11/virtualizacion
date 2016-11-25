<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Auth;
use Session;
use Redirect;
use DB;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = \App\Curso::paginate(6);
        return view('admin.curso', compact('cursos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \App\Curso::create([
            'name'=> $request['name'],
            'code'=> $request['code'],
        ]);
        Session::flash('flash_message', 'Curso creado satisfactoriamente!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $curso = \App\Curso::find($id);

        return view('admin.curso_view',compact('curso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $curso = \App\Curso::find($id);
        $curso->fill($request->all());
        $curso-> save();
        Session::flash('message', 'Curso Editado Correctamente');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \App\Curso::destroy($id);
        Session::flash('message', 'Curso eliminado Correctamente');
        return redirect()->back();
    }

    public function getMat(Request $request){
        $term= $request->term; //jQuery
        $data = \App\Curso::where('name', 'LIKE', $term.'%')
        ->take(10)
        ->get();
        $results = array();
        foreach ($data as $key => $val) {
            $results[] = ['value'=>$val->name];
        }
        return response()->json($results);
    }

    public function addCurso(Request $request)
    {
        //añadir un curso a una carrera
        $carrera = \App\Carrera::find($request->carrera_id);
        $curso = \App\Curso::where('name',$request['curso_name'])->get();
        $curso = $curso[0];
        $existe = DB::table('carrera_curso')->where('carrera_id', '=', $request['carrera_id'])->where('curso_id','=',$curso['id'])->count();
        if($existe > 0){
            Session::flash('flash_message', 'El curso ya existe');
            return redirect()->back();
        }else{
            $carrera->cursos()->attach($curso['id']);
            Session::flash('message', 'Curso añadido Correctamente');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function rmCurso(Request $request)
    {
        //borrar el curso de una carrera
        DB::table('carrera_curso')->where('carrera_id', '=', $request['carrera_id'])->where('curso_id','=',$request['curso_id'])->delete();
        Session::flash('message', 'Curso Borrado Correctamente');
        return redirect()->back();
    }

    public function getDownload($path)
    {
        $pathToFile=storage_path()."/app/".$path;
        return response()->download($pathToFile);
    }
}
