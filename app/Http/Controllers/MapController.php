<?php

namespace App\Http\Controllers;

use App\Formatteur as Formatteur;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MapController extends Controller
{
    public function index(){
        $formatteurs = Formatteur::All();
        $data = $arrayName = array('formatteurs' =>  $formatteurs );

        return view('index',$data);
    }

    public function addFormatteur(){
        return view('formulaire');
    }
}