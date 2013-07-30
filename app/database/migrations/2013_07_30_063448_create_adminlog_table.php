<?php

use Illuminate\Database\Migrations\Migration;

class CreateAdminlogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Create the `Adminlog` table
		Schema::create('adminlog', function($table)
		{
            $table->engine = 'InnoDB';
			$table->increments('id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->integer('post_id')->unsigned();
			$table->enum('action', array('add', 'update', 'approve', 'delete'));
			$table->text('changelog');
			$table->dateTime('created_at');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		// Delete the `Adminlog` table
		Schema::drop('adminlog');
	}

}