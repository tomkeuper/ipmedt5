<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AfstandSensor;

class SensorenController extends Controller
{
    public function index() {

    }
    public function show() {
        return view('sensoren');
    }

    public function afstandSensor() {
        $afstandsensor = AfstandSensor::all()->first();

        if($afstandsensor->sensor_on == 'uit') {
            $afstandsensor->sensor_on = 'aan';
        } else {
            $afstandsensor->sensor_on = 'uit';
        }
        $afstandsensor->save();
        return redirect('/');
    }
}
