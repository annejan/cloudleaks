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

                        $table->integer('dutation')->unsigned();
                        $table->integer('volume')->unsigned();
                        $table->integer('hue')->unsigned();
                        $table->integer('saturation')->unsigned();
                        $table->integer('brightness')->unsigned();
                        $table->integer('temperature')->unsigned();
                        $table->integer('acidity')->unsigned();
                        $table->integer('salinity')->unsigned();
                        $table->integer('glucose')->unsigned();
                        $table->boolean('pregnant');

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
