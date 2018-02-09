<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->increments('id');
            $table->String('id_etudiant')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('name');
            $table->String('genre');
            $table->string('departement');
            $table->string('formation');
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('departement')->references('nom_departement')->on('departement')->onDelete('cascade');
            $table->foreign('formation')->references('code_formation')->on('formation')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etudiants');
    }
}
