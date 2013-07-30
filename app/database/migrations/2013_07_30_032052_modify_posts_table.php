<?php

use Illuminate\Database\Migrations\Migration;

class ModifyPostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		 Schema::table('posts', function($table)
		{
		    $table->dropColumn('slug', 'meta_title', 'meta_description','meta_keywords');
		    $table->boolean('published');
		    $table->dateTime('publish_on');
		    $table->dateTime('published_on');
		    $table->string('attachment', 200);
		    $table->string('network', 20);
		    $table->softDeletes();
		});
		
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		$table->dropColumn('published', 'publish_on', 'published_on','attachment','network');
	}

}