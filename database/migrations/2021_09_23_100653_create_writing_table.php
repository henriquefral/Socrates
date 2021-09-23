<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWritingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('writing', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content'); 
            $table->string('color',20);
            $table->dateTime('date'); // https://www.youtube.com/watch?v=MIN3g2OvIPQ
            $table->string('image');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('writing');
    }
}
