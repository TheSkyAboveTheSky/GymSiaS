<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandeAccesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demande_acces', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained("users");
            $table->foreignId('seance_id')->constrained("seances");
            $table->unsignedInteger('Etatdemande')->default(1);;
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
        Schema::dropIfExists('demande_acces');
    }
}
