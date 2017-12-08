<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Helpers\MottoBluePrint;

class CreateSeosTable extends Migration
{
    public function up()
    {
		$schema = DB::connection()->getSchemaBuilder();

	    $schema->blueprintResolver(function($table, $callback) {
	        return new MottoBluePrint($table, $callback);
	    });

	    $schema->create('seos', function($table) {
			$table->increments('id');
			$table->string('pagina', 255)->nullable();
			$table->integer('seoable_id')->nullable();
			$table->string('seoable_type', 255)->nullable();
			$table->text('slug');
			$table->string('og_image')->nullable();
			$table->string('og_url')->nullable();
			$table->text('title')->nullable();
			$table->text('description')->nullable();
			$table->text('keywords')->nullable();
			$table->text('og_title')->nullable();
			$table->text('og_description')->nullable();

			$table->mottoOrdrePublicat(1);
			$table->mottoTimeStamps();
			$table->softDeletes();
	    });
    }

    public function down()
    {
        Schema::drop('seos');
    }
}
