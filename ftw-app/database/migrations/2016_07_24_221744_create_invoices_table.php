<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');
			$table->decimal('amount',16,2);
			$table->date('start_date');
			$table->date('end_date');
			$table->dateTime('payed_at');
			
			$table->enum('payment_status', ['Paid', 'Unpaid', 'Pending'])->nullable();
            $table->timestamps();
			$table->string('trans_id');
			$table->string('auth_code');
			$table->integer('user_id')->unsigned();
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
        Schema::drop('invoices');
    }
}
