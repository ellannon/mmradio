<?php

namespace App\Helpers;

use Illuminate\Database\Schema\Blueprint;

class MottoBluePrint extends Blueprint
{
    public function mottoOrdrePublicat($defaultPublicat = 0)
    {
		$this->integer('ordre')->nullable();
        $this->boolean('publicat')->default($defaultPublicat);
    }

	public function mottoTimeStamps()
    {
		$this->integer('created_user')->nullable();
		$this->timestamp('created_at')->nullable();
		$this->integer('updated_user')->nullable();
		$this->timestamp('updated_at')->nullable();
		$this->integer('deleted_user')->nullable();
    }
}
