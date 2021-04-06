<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeveiligingController extends Controller
{
    public function Beveiliging() {
        $beveiliging = Beveiliging::all()->first();

        if($beveiliging->triggered == 'false') {
            $beveiliging->triggered = 'true';
        } else {
            $beveiliging->triggered = 'false';
        }
        $beveiliging->save();
        return redirect('/');
    }
}
