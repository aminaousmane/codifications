<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id_reservation');
            $table->datetime('date_reservation');
            $table->Integer('etat')->default(0);
            $table->String('chambre');
            $table->String('etudiant');
            $table->String('pavillon');
            $table->Integer('etage');
            $table->String('couloir');
            $table->timestamps();
            $table->foreign('chambre')->references('id_chambre')->on('chambre')->onDelete('cascade');
            $table->foreign('etudiant')->references('id_etudiant')->on('etudiant')->onDelete('cascade');
            $table->foreign('couloir')->references('direction')->on('couloir')->onDelete('cascade');
            $table->foreign('pavillon')->references('name')->on('pavillon')->onDelete('cascade');
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
        Schema::dropIfExists('reservations');
    }
}
