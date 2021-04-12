<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PushmeldingController extends Controller
{
    public function stuurMelding() {
        $beveiliging = Beveiliging::all()->first();

        if($beveiliging->triggered == 'true') {
            
        } else {
            
        }
        $beveiliging->save();
        return view('pushmelding');
    }
}
