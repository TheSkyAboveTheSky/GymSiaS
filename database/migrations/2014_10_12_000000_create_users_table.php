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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('password');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->unsignedInteger('role_id')->nullable();
            $table->unsignedInteger('duree_abonement_in_months')->nullable();
            $table->timestamp('date_debut_abonnement')->nullable();
            $table->timestamp('abonnement_expired_at')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
/*             $table->bigInteger('seance_id')->nullable();
            $table->bigInteger('salle_id')->nullable(); */
            $table->rememberToken();
            $table->timestamps();
 /*            $table->foreignId('seance_id')->constrained('seances');
            $table->foreignId('salle_id')->constrained('salles'); */
/*             $table->foreign('seance_id')->references('id')->on('seances')->onDelete('cascade');
            $table->foreign('salle_id')->references('id')->on('salles')->onDelete('cascade'); */

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};