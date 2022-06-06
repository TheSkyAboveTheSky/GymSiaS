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
            $table->id('user_id');
            $table->string('name');
            $table->string('password');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->unsignedSmallInteger('role_id')->nullable();
            $table->unsignedSmallInteger('duree_abonement_in_months')->nullable();
            $table->timestamp('date_debut_abonnement')->nullable();
            $table->timestamp('abonnement_expired_at')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->string('seance_id', 2048)->nullable();
            $table->string('salle_id', 2048)->nullable();
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
        Schema::dropIfExists('users');
    }
};