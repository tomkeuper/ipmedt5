<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Huis;

class HuisController extends Controller
{
    public function index() {
        return view('huizen.index',[
            'huis' => Huis::all()
        ]);
    }

    public function show($id) {
        return view('huizen.show',[
            'huis' => Huis::find($id)
        ]);
    }
}