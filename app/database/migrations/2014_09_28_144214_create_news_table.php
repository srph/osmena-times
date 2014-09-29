<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('news', function($table)
		{
			$table->increments('id');
			$table->string('user_id');
			$table->string('category_id')->nullable()->default('1');
			$table->string('title');
			$table->text('content');
			$table->string('preview');
			$table->string('cover')->nullable()->default('cover.jpg');
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
		Schema::dropIfExists('news');
	}

}
