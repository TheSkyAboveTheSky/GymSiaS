<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seances', function (Blueprint $table) {
            $table->id();
            $table->timestamp('seance_debut')->nullable();
            $table->timestamp('seance_fin')->nullable();
            $table->string('jour');
            $table->text('activite');
            $table->timestamps();
            $table->foreignId('coach_id')->constrained('users');
            $table->foreignId('user_id')->constrained('users');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seances');
    }
}
