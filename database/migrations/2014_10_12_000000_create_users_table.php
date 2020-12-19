<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_user2', function (Blueprint $table) {
            $table->increments('iduser');
            $table->string('login')->unique();
            $table->string('email')->unique();
            $table->string('passwordhash');
            $table->tinyInteger('isadmin');
            $table->string('fullname');
            $table->string('cpf');  
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
