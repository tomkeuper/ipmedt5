<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Huis;
use Auth;

class HuisController extends Controller
{
    public function index() {
        $user_id = Auth::user()->id;
        return view('dashboard',[
            'huis' => Huis::all()->where('mantelzorger', '==', $user_id),
            'user' => Auth::user()
        ]);
    }

    public function show($id) {
        return view('huizen.show',[
            'huis' => Huis::find($id)
        ]);
    }
}