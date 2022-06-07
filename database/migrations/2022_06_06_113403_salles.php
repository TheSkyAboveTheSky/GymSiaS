<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Salles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('salles', function (Blueprint $table) {
                $table->increments('id');
                $table->string('salle_name');
                $table->bigInteger('admin_id');
                $table->string('adresse');
                $table->timestamps();

                $table->foreign('admin_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('salles');
    }
}
