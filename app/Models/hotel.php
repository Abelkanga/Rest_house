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

        Schema::create('hotel', function (Blueprint $table) {

            $table->id();
            $table->string('Nomhotel'); // nouveau
            $table->string('Payshotel'); // nouveau
            $table->string('Villehotel'); // nouveau
            $table->string('SecteurHotel'); // nouveau
            $table->string('Téléphonehotel'); // nouveau
            $table->string('Classehotel'); // nouveau
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

        Schema::dropIfExists('hotel');

    }

};