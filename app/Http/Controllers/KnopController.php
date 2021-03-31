<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KnopController extends Controller
{
    public function aanuit(){
        $knop = \App\Models\Knop::all()->first();

        if ($knop->btn_pressed == 'false'){
            $knop->btn_pressed = 'true';
        }
        else {
            $knop->btn_pressed = 'false';
        }
        $knop->save();
        return redirect('/');
    }
}
