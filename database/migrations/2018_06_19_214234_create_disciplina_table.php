<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisciplinaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disciplina', function (Blueprint $table) {
            $table->increments('id');
            $table->text('descricaoEmenta');
            $table->integer('carga_horaria');
            $table->integer('id_pre')->unsigned();
            $table->integer('periodo');
            $table->integer('id_professor')->unsigned();
        });
        Schema::table('disciplina', function ($table) {
            $table->foreign('id_pre')
                ->references('id')->on('disciplina')
                ->onDelete('cascade');
            $table->foreign('id_professor')
                ->references('id')->on('professor')
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
        Schema::dropIfExists('disciplina');
    }
}
