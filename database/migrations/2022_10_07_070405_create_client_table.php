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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('clientNom');
            $table->string('clientprenom');
            $table->string('clientAdresse');
            $table->string('clientVille');
            $table->string('clientCodePostal');
            $table->string('clientTelephone');
            $table->string('clientEmail');
            $table->date('clientDateNaissance');
            $table->dateTime('creationDate')->useCurrent();
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
        Schema::dropIfExists('clients');
    }
};
