<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chap', function (Blueprint $table) {
            $table->id();
            $table->integer('chap');
            $table->string('content');
            $table->integer('views');
            $table->unsignedBigInteger('flim_id');
            $table->foreign('flim_id')->references('id')->on('flim');
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
        Schema::dropIfExists('chap');
    }
}
