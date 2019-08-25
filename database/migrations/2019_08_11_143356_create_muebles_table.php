<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMueblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('muebles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->decimal('precio',8,2);
            $table->string('material');
            $table->decimal('alto',5,0);
            $table->decimal('ancho',5,0);
            $table->decimal('profundidad',5,0);
            $table->string('color');
            $table->string('foto');            
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
        Schema::dropIfExists('muebles');
    }
}
