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
        Schema::create('users', function (Blueprint $table) {
            $table->interger('experience');
            $table->id();
            $table->string('name');
            $table->integer('age');
            $table->string('cpf');
            $table->date('birth_date');
            $table->string('occupation');
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
  $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
                     $table->timestampTz($precision = 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Drop foreign key users.
        Schema::dropIfExists('users');
    }
}
