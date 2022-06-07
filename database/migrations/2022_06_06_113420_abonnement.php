<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Abonnement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('abonnements', function (Blueprint $table) {
            $table->id();
            $table->string('duree');
            $table->string('prix');
            $table->foreignId('salle_id')->constrained('salles');

/*             $table->foreign('salle_id')->references('id')->on('salles')->onDelete('cascade');
 */
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
        Schema::dropIfExists('abonnements');
    }
}
