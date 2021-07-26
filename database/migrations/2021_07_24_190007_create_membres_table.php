<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membres', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('sexe');
            $table->string('date2naissance');
            $table->string('lieu2naissance');
            $table->string('poste');
            $table->string('adresse');
            $table->string('nationnalite');
            $table->string('permis');
            $table->text('competence');
            $table->text('biographie');
            $table->unsignedBigInteger('etat_id');
            $table->foreign('etat_id')->references('id')->on('etats');
            $table->string('photo');
            $table->string('cv');
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
        Schema::dropIfExists('membres');
    }
}
