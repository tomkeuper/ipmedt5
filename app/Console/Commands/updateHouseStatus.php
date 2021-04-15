<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Sensor;
use App\Models\Knop;
use App\Models\Huis;

class updateHouseStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'updateHouseStatus';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $id = "2d#e";
        info("Starting command '{$id}'");
         
        // Standaard waarde voor alarm
        $alarmvalue = false;

        // Haal alle sensoren op
        $sensors = Sensor::all()->where('enabled', '==', 'true');

        foreach($sensors as $sensor) {
            info("{$sensor}");
            $sensorval = Knop::find($sensor->sensor_id);
            info("{$sensorval}");

            // Check of er een knop is ingedrukt
            if ($sensorval->btn_pressed == "true"){
                info("Sensor is true");
                $alarmvalue = true;


                // Zet alarm value van huis op true
                $huis = Huis::find($sensor->huis_id);
                $huis->alarm = 'true';
                $huis->save();
            }
            elseif ($sensorval->btn_pressed == "false"){
                info("Sensor is false");
            }
        }

        info("finished command '{$id}'");

        return 0;


    }
}
