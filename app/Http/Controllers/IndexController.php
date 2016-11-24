<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Session;
use Redirect;
use Input;
use DB;



class IndexController extends Controller
{



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        if(Auth::attempt(['email'=> $request['email'], 'password' => $request['password']])){

            $cargo_id =  Auth::user()->cargo_id;


            $cargo = \App\Cargo::find($cargo_id);
            $rol = $cargo['rol'];

            if($rol == "Admin"){
                return Redirect::to('admin');
            }elseif ($rol == "Worker"){
                return redirect()->action('WorkerController@index',Auth::user()->id);
            }elseif($rol == "Manager"){
                return redirect()->action('ManagerController@index',Auth::user()->id);
            }elseif($rol == "Expert"){
                return redirect()->action('ExpertController@index',Auth::user()->id);
            }elseif($rol == "Director"){
                return redirect()->action('DirectorController@index',Auth::user()->id);
            }
        }else{
            Session::flash('message-error', "Sus datos son incorrectos");
            return Redirect::to('/');
        }
    }

    public function principal(){
        return view('principal');
    }


    public function logout()
    {
        Auth::logout();
        return Redirect::to('/');   
    }

    public function recover_psw()
    {
        return  view('recover_password');
    }





}
