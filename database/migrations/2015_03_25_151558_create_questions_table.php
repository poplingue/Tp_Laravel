<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('questions', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->integer('category_id')->unsigned()->nullable();
			$table->text('question');
			$table->text('answer');
			$table->text('wiki');
			$table->timestamps();
                        
                        $table->foreign('category_id')
                              ->references('id')
                              ->on('categories')
                              ->onDelete('SET NULL');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('questions');
	}

}
