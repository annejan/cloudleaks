<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSamplesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('samples', function(Blueprint $table)
		{
			$table->increments('id');
			
                        $table->integer('profile_id')->unsigned();
	                $table->foreign('profile_id')->references('id')->on('profiles');
                        $table->integer('toilet_id')->unsigned();
	                $table->foreign('toilet_id')->references('id')->on('toilets');		

                        $table->integer('duration')->unsigned();
                        $table->integer('loudness')->unsigned()->nullable();
                        $table->integer('volume')->unsigned()->nullable();
                        $table->integer('hue')->unsigned()->nullable();
                        $table->integer('saturation')->unsigned()->nullable();
                        $table->integer('brightness')->unsigned()->nullable();
                        $table->integer('temperature')->unsigned();
                        $table->integer('acidity')->unsigned()->nullable();
                        $table->integer('salinity')->unsigned()->nullable();
                        $table->integer('glucose')->unsigned()->nullable();
                        $table->boolean('pregnant')->default(false);

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
		Schema::drop('samples');
	}

}
