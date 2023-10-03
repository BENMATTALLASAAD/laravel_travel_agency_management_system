<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    function index(Request $request){
        return View('home');
    }
}
