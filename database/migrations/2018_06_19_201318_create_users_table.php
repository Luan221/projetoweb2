<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function(Blueprint $table)
        {
            $table->increments('id');

            $table->string('nome', 32);
            $table->string('sobrenome', 32);
            $table->string('telefone', 32);
            $table->string('email', 320);
            $table->string('password', 64);
            $table->boolean('admin')->defaut(0);
            $table->integer('permissionID');
            $table->integer('id_aluno')->unsigned();
            $table->integer('id_professor')->unsigned();




            $table->string('remember_token', 100)->nullable();
            $table->timestamps();
        });
        Schema::table('users', function($table) {
            $table->foreign('id_aluno')
                ->references('id')->on('aluno')
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
        Schema::drop('users');
    }

}
