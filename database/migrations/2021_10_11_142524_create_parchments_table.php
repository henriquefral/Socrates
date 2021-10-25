<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParchmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parchments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('tome_id')->references('id')->on('scrolls')->onDelete('cascade');
            $table->string('category');
            $table->string('title');
            $table->longText('content'); 
            $table->dateTime('date'); // https://www.youtube.com/watch?v=MIN3g2OvIPQ
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('parchments', function (Blueprint $table) {
            $table->dropForeign('parchments_user_id_foreign');
            $table->dropForeign('parchments_tome_id_foreign');
        });
        Schema::dropIfExists('parchments');
    }
}
