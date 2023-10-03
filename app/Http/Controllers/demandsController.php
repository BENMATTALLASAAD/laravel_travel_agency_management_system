<?php

namespace App\Http\Controllers;

use App\Models\demand;
use Illuminate\Http\Request;

class demandsController extends Controller
{
    public function show(){
        $demands =  demand::paginate(7);
        return view('demands.demands',['demands'=>$demands]);
    }

    public function demandType(){
        return view('demands.demandType');
    }
}
