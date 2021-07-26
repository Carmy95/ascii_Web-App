<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBurosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buros', function (Blueprint $table) {
            $table->id();
            $table->string('libelle')->unique();
            $table->unsignedBigInteger('annee_id');
            $table->foreign('annee_id')->references('id')->on('annees');
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
        Schema::dropIfExists('buros');
    }
}
