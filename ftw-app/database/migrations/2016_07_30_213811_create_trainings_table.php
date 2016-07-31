<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainings', function (Blueprint $table) {
            $table->increments('id');
			$table->string('title');
			$table->text('text');
			$table->string('youtube_vide');
			$table->string('pdf');
            $table->timestamps();
			
			$table->integer('category_id')->unsigned();
			$table->foreign('category_id')->references('id')->on('training_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('trainings');
    }
}
