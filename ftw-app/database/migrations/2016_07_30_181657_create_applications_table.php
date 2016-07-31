<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('invitation_id')->unsigned();
			$table->foreign('invitation_id')->references('id')->on('invitations');
			
			$table->string('first_name');
			$table->string('last_name');
			$table->boolean('age_verify');
			$table->text('your_vision'); //json
			$table->text('your_vision_note');
			$table->text('your_idea');
			$table->string('your_income_1year');
			
			$table->string('have_fast_businesses');
			$table->string('if_businesses_success');
			$table->text('faild_reason'); // json
			$table->text('faild_reason_note');
			$table->text('why_you_join');
			
			$table->string('woking_hours');
			$table->string('funding_support_intrest');
			$table->string('expenses_limit');
			$table->text('payment_method'); //json
			$table->text('payment_method_note');
			
			$table->string('best_way_to_earn');
			$table->string('statement_agree');
			$table->string('like_to_public');
			$table->string('teaching_others');
			$table->string('would_like_workhard');
			$table->string('life_attitude');
			$table->text('comments');
			
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
        Schema::drop('applications');
    }
}
