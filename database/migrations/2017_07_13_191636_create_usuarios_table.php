<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('imagen_perfil')->unique();            
            $table->string('telefono',10)->unique();
            $table->string('telefono2',10);
            $table->string('direccion');
            $table->string('email', 60)->unique();
            $table->string('password');   
            $table->integer('rol_id')->unsigned();
            $table->rememberToken();
            $table->timestamps();
            //relaciones
            $table->foreign('rol_id')->references('id')->on('roles');
        });
        
        DB::insert('insert into usuarios (imagen_perfil,telefono,telefono2,direccion,email,password,rol_id) values ( ?,?,?,?,?,?,? )', [time(),'7713296509','null','null','admin@hacker.one', bcrypt('admin'),'1']);
        DB::insert('insert into usuarios (imagen_perfil,telefono,telefono2,direccion,email,password,rol_id) values ( ?,?,?,?,?,?,? )', [time()+1,'7713296508','null','null','admin2@hacker.one', bcrypt('admin'),'1']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
