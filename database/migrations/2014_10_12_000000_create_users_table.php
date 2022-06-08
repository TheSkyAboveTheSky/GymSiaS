<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;

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
            $table->string('password')->default(Hash::make('12345678'));
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->unsignedInteger('role_id')->nullable();
            $table->unsignedInteger('duree_abonement_in_months')->nullable();
            $table->timestamp('date_debut_abonnement')->nullable();
            $table->timestamp('abonnement_expired_at')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
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