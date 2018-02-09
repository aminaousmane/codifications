<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChambresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chambres', function (Blueprint $table) {
            $table->increments('id_chambre');
            $table->String('code');
            $table->String('pavillon');
            $table->String('couloir');
            $table->Integer('etage');
            $table->timestamps();
            $table->foreign('pavillon')->references('name')->on('pavillon')->onDelete('cascade');
        $table->foreign('couloir')->references('direction')->on('couloir')->onDelete('cascade');
        $table->foreign('etage')->references('niveau')->on('eatge')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chambres');
    }
}
