<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AfstandSensor extends Model
{
    protected $fillable = ['sensor_on'];
    public $primary_key = ['sensor_on'];
    protected $table = 'afstandsensor';
}
