<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunoExtensaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aluno_extensao', function (Blueprint $table) {
            $table->integer('id_aluno')->unsigned();
            $table->integer('id_extensao')->unsigned();
        });
        Schema::table('aluno_extensao', function($table) {
            $table->foreign('id_aluno')
                ->references('id')->on('aluno')
                ->onDelete('cascade');
            $table->foreign('id_extensao')
                ->references('id')->on('pro_extensao')
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
        Schema::dropIfExists('aluno_extensao');
    }
}
