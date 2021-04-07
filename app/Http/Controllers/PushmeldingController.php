<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PushmeldingController extends Controller
{
    public function stuurMelding() {
        return view('pushnotificatie/pushmelding');
    }
}
