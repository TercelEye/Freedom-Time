<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvitationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invitations', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->string('email');
			$table->string('secret_pascode');
			$table->string('name');
			$table->string('tel');
			$table->boolean('is_affiliate');
			$table->text('intrest_products')->nullable();
			$table->text('note')->nullable();
			$table->boolean('quality_check');
			
			$table->boolean('video_watched');
			$table->enum('feedback', ['Green', 'Red', 'Blue', 'Yellow'])->nullable();	
            $table->timestamps();
			
			$table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('invitations');
    }
}
