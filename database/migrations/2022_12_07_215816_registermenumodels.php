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
        Schema::create('registermenumodels', function (Blueprint $table) {
            $table->id();
            $table->string('name_plat');
            $table->string('no_plat');
            $table->integer('prix_plat');
            $table->string('time_cuisson');
            $table->string('categorie_plat');
            $table->string('photo_plat')->nullable();
            $table->string('description_plat');
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
        //
        Schema::dropIfExists('registermenumodels');
    }
};
