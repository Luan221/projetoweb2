<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGradeDisciplinaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grade_disciplina', function (Blueprint $table) {
            $table->integer('id_aluno')->unsigned();
            $table->integer('id_disciplina')->unsigned();

        });
        Schema::table('grade_disciplina', function($table) {
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
        Schema::dropIfExists('grade_disciplina');
    }
}
