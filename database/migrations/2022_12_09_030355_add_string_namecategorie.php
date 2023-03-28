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
      
        Schema::table('registercategoriemenuplatmodels', function($table) {
       
            $table->string('name_categorie');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('registercategoriemenuplatmodels', function ($table) {
            $table->dropColumn('name_categorie');
        });
    }
};
