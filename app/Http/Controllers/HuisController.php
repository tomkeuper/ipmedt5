<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Huis;
use App\Models\Sensor;
use App\Models\Temperatuur;
use App\Models\Vochtigheid;
use App\Models\Beveiliging;
use Auth;

class HuisController extends Controller
{
    public function index() {
        $user = Auth::user()->id;
        return view('dashboard',[
            'huis' => Huis::all()->where('mantelzorger', '==', $user),
            'user' => Auth::user(),
        ]);
    }

    public function show($id) {
        return view('huizen.show',[
            'huis' => Huis::find($id),
            'paniek' => Sensor::all()->where('huis_id', '==', $id)->where('sensor_id', '==', '1'),
            'water' => Sensor::all()->where('huis_id', '==', $id)->where('sensor_id', '==', '2'),
            'gas' => Sensor::all()->where('huis_id', '==', $id)->where('sensor_id', '==', '3'),
            'temperatuur' => Temperatuur::all()->where('huis_id', '==', $id),
            'vochtigheid' => Vochtigheid::all()->where('huis_id', '==', $id),
            'beveiliging' => Beveiliging::all()->where('huis_id', '==', $id),
        ]);
    }
}