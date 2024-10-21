<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConstructorController extends Controller
{
    public function index()
{
    return view('roles.constructor.dashboard');
}
}
