<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('comercial_id')->unsigned();
            $table->bigInteger('empresa_id')->unsigned();
            $table->string('nombre');
            $table->string('calle')->nullable();
            $table->string('poblacion')->nullable();
            $table->string('mail')->nullable();
            $table->string('comercial');
            $table->string('grupo')->nullable();
            $table->string('empresa');
            $table->timestamps();

            $table->foreign('comercial_id')->references('id')->on('comercials')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('empresa_id')->references('id')->on('empresas')
                ->onDelete('cascade')
                ->onUpdate('cascade');

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
}
