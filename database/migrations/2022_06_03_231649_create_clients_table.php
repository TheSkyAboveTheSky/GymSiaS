<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id('client_id');
            $table->string('name');
            $table->string('password');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->unsignedSmallInteger('duree_abonement_in_months')->nullable();
            $table->timestamp('date_debut_abonnement')->nullable();
            $table->timestamp('abonnement_expired_at')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->string('Seance_id', 2048)->nullable();
            $table->string('Salle_id', 2048)->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('clients');
    }
}
