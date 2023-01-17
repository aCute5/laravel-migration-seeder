<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('agency', 200);
            $table->string('departure', 200);
            $table->string('arrive', 200);
            $table->dateTime('departure_time');
            $table->dateTime('departure_arrive');
            $table->mediumInteger('train_code');
            $table->smallInteger('n_carriage');
            $table->boolean('in time');
            $table->boolean('deleted');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
}
