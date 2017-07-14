<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donaciones', function (Blueprint $table) {
            $table->increments('id'); 
            $table->integer('proyecto_id')->unsigned();
            $table->integer('empresa_id')->unsigned();
            $table->float('cantidad', 8, 2);
            $table->timestamps();
            
            $table->foreign('proyecto_id')->references('id')->on('proyectos');
            $table->foreign('empresa_id')->references('id')->on('empresas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donaciones');
    }
}
