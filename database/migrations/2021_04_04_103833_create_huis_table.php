<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHuisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('huis', function (Blueprint $table) {
            $table->id();//->references('huis_id')->on('allowed_users')->onDelete('cascade');
            $table->string('naam');
            $table->string('straat');
            $table->string('huisnummer');
            $table->string('plaats');
            $table->string('alarm')->default('false');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('huis');
    }
}
