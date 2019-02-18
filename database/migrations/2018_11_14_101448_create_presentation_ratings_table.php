<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePresentationRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presentation_ratings', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('presentation_id');
            $table->foreign('presentation_id')->references('id')->on('presentations')->onDelete('cascade');
            $table->integer('awesome')->nullable();
            $table->integer('good')->nullable();
            $table->integer('average')->nullable();
            $table->integer('bad')->nullable();
            $table->integer('horrible')->nullable();
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
        Schema::dropIfExists('presentation_ratings');
    }
}
