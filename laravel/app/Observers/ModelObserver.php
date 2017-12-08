<?php

namespace App\Observers;

use Illuminate\Database\Eloquent\Model;
use Auth;

class ModelObserver
{
	/*
	* OBSERVER QUE S'IMPORTA A TOTS ELS MODELS ON ES VULGUI FER SERVIR. GESTIONAR AUTOMATICAMENT ELS CAMPS CREATED USER, UPDATED USER I DELETED USER AMB EL PUBLICAT = 0 EN AQUEST ULTIM CAS PER A TOTS ELS MODELS (SIGUI QUIN SIGUI) QUE TINGUI EL SEGÜENT A LES CAPÇALERES DEL RESPECTIU MODEL

	* use App\Traits\ModelObservantTrait; <- a la capçalera
	* use ModelObservantTrait; <- dins la classe
	*/
    public function creating($model)
    {
        $model->created_user = Auth::id();
    }

    public function updating($model)
    {
        $model->updated_user = Auth::id();
    }

	public function deleting($model)
    {
		$model->update(['publicat' => 0, 'deleted_user' => Auth::id()]);
    }
}
