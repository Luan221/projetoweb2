<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('nota1');
            $table->integer('nota2');
            $table->integer('media');
            $table->integer('id_aluno')->unsigned();
            $table->integer('id_disciplina')->unsigned();


            $table->timestamps();
        });
        Schema::table('notas', function($table) {
            $table->foreign('id_aluno')
                ->references('id')->on('aluno')
                ->onDelete('cascade');
            $table->foreign('id_disciplina')
                ->references('id')->on('disciplina')
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
        Schema::drop('notas');
    }

}
