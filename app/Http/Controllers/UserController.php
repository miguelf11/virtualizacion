<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use DB;
use Session;
use Illuminate\Http\Request;
use Redirect;



class UserController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cargos = DB::table('cargos')->select('name')->lists('name');
        $users = \App\User::paginate(6);
        return view('admin.users', compact('users','cargos'));
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

        $cargos = DB::table('cargos')->select('id')->lists('id');
        $id = $cargos[$request['cargo']];

        \App\User::create([
            'name'=> $request['name'],
            'email'=> $request['email'],
            'cargo_id'=> $id,
            'password'=> $request['password'],
        ]);
        Session::flash('flash_message', 'Carrera creado satisfactoriamente!');
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
        //
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
        $user = \App\User::find($id);
        $cargos = DB::table('cargos')->select('id')->lists('id');
        $id = $cargos[$request['cargo']];
        $request['cargo'] = $id;
        $user->fill($request->all());
        $user->cargo_id = $request->cargo;
        $user-> save();
        Session::flash('message', 'Usuario Editado Correctamente');
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
        \App\User::destroy($id);
        Session::flash('message', 'Usuario eliminado Correctamente');
        return redirect()->back();
    }
}
