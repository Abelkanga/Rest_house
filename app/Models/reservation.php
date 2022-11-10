<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {

        Schema::create('reservation', function (Blueprint $table) {

            $table->id();
            $table->string('Designationreservation'); // nouveau
            $table->time('Datereservation'); // nouveau
            $table->time('Duréesejour'); // nouveau
            $table->timestamps();

        });

    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */

    public function down()
    {

        Schema::dropIfExists('reservation');

    }

};