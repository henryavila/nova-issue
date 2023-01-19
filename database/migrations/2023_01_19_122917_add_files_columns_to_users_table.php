<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
	public function up()
	{
		Schema::table('users', function (Blueprint $table) {

			$table->string('audio_file')->nullable();
			$table->string('audio_file_name')->nullable();
			$table->unsignedMediumInteger('audio_file_size')->nullable();

			$table->string('pdf_file')->nullable();
			$table->string('pdf_file_name')->nullable();
			$table->unsignedMediumInteger('pdf_file_size')->nullable();

		});
	}

	public function down()
	{
		Schema::table('user', function (Blueprint $table) {
			$table->dropColumn('audio_file');
			$table->dropColumn('audio_file_name');
			$table->dropColumn('audio_file_size');
			$table->dropColumn('pdf_file');
			$table->dropColumn('pdf_file_name');
			$table->dropColumn('pdf_file_size');
		});
	}
};
