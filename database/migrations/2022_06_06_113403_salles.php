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
                $table->id();
                $table->string('salle_name');
                $table->string('adresse');
                $table->timestamps();
/*                 $table->foreignId('admin_id')->constrained('users'); */
/*                 $table->foreignId('user_id')->constrained('users');
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
        Schema::dropIfExists('salles');
    }
}
