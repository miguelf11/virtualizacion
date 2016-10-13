<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::attempt(['email'=> $request['email'], 'password' => $request['password']])){
            if(Auth::user()->rol == 'Administrador'){
                return Redirect::to('admin');
            }else{
                return Redirect::to('/principal');
            }
        }else{
            Session::flash('message-error', "Sus datos son incorrectos");
            return Redirect::to('/');
        }
    }

    public function principal(){
        return view('principal');
    }





}