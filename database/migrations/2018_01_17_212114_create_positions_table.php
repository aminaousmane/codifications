<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('positions', function (Blueprint $table) {
            $table->increments('id_position');
            $table->String('pavillon');
            $table->Integer('chambre');
            $table->String('couloir');
            $table->Integer('etage');
            $table->String('genre');
            $table->String('etat')->default(0);
            $table->String('formation');
            $table->timestamps();
            $table->foreign('pavillon')->references('name')->on('pavillon')->onDelete('cascade');
            $table->foreign('chambre')->references('code')->on('chambre')->onDelete('cascade');
            $table->foreign('etage')->references('niveau')->on('etage')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('positions');
    }
}
