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
        Schema::create('facture', function (Blueprint $table) {
            $table->id();
            $table->string('factureNom');
            $table->unsignedBigInteger('factureClient');
            $table->unsignedBigInteger('factureProduit');
            $table->float('PrixTotal');
            $table->timestamps();

            $table->foreign('factureClient')->references('id')->on('client');
            $table->foreign('factureProduit')->references('id')->on('produit');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facture');
    }
};
