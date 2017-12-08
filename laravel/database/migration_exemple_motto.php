<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Helpers\MottoBluePrint;

class CreateNom_TaulaTable extends Migration
{
    public function up()
    {
		$schema = DB::connection()->getSchemaBuilder();

	    $schema->blueprintResolver(function($table, $callback) {
	        return new MottoBluePrint($table, $callback);
	    });

	    $schema->create('nom_taula', function($table) {
			$table->increments('id');

			$table->mottoOrdrePublicat(1);
			$table->mottoTimeStamps();
			$table->softDeletes();
	    });
    }

    public function down()
    {
        Schema::drop('nom_taula');
    }
}
