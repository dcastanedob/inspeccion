<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('equipments', function (Blueprint $table) {
            $table->increments('id'); // ID
            $table->string('name'); // NOMBRE
            $table->text('description')->nullable(); // DESCRIPCION
            $table->string('serial')->nullable(); // NUMERO DE SERIE
            $table->dateTime('manufactured_at')->nullable(); // FECHA DE FABRICACIÓN / COMPRA
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
        Schema::drop('equipments');
    }
}
