<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return inertia('Auth/Register');
    }

    public function login(){
        return inertia('Auth/Login');
    }

    public function create(){
    }

    public function store(){
    }

    public function destroy(){}
}
