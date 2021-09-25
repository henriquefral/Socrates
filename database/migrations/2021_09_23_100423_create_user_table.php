<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('name',80);
            $table->integer('age');
            $table->integer('cpf');
            $table->date('birth_date');
            $table->string('occupation');
            $table->string('email')->unique();
            $table->string('password');

$table->timestamp('email_verified_at')->nullable();

$table->rememberToken();         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
