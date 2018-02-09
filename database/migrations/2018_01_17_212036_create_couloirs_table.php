<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCouloirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('couloirs', function (Blueprint $table) {
            $table->increments('id_couloirs');
            $table->Integer('etage');
            $table->String('direction');
            $table->timestamps();
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
        Schema::dropIfExists('couloirs');
    }
}
