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

        Schema::create('client', function (Blueprint $table) {

            $table->id();
            $table->string('Nomclient'); // nouveau
            $table->string('Prenomclient'); // nouveau
            $table->string('Téléphoneclient'); // nouveau
            $table->string('Emailclient'); // nouveau
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

        Schema::dropIfExists('client');

    }

};