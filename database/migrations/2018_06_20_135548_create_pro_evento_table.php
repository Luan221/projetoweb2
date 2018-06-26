<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProEventoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pro_evento', function (Blueprint $table) {
            $table->integer('id_professor')->unsigned();
            $table->integer('id_evento')->unsigned();
        });
        Schema::table('pro_evento', function($table) {
            $table->foreign('id_professor')
                ->references('id')->on('professor')
                ->onDelete('cascade');
            $table->foreign('id_evento')
                ->references('id')->on('evento')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pro_evento');
    }
}
