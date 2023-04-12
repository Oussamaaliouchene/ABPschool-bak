<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function index(){
        return view('index');
    }
    public function dashboard(){
        return view('dashboard');
    }
    public function formations(){
        return view('cours');
    }
    public function etudiants(){
        return view('index');
    }
    public function promotions(){
        return view('promotions');
    }
    public function finances(){
        return view('finances');
    }
}
