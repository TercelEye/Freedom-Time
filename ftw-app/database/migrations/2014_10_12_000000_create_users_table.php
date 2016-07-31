<?php

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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
			$table->boolean('is_admin');
            $table->string('name');
			$table->string('username')->unique();
			$table->string('fname');
			$table->string('lname');
			$table->string('invited_by');
			$table->string('tel');
			$table->string('address');
			$table->string('city');
			$table->string('zip_code');
			$table->string('paypal_email');
            $table->string('email')->unique();
            $table->string('password');
			$table->boolean('status');
			$table->string('profileid');
			$table->string('paymentprofileid');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
