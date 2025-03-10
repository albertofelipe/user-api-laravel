<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index');
    }

    public function create() 
    {
        return view('users.create');
    }

    public function store() 
    {
        
    }
}
