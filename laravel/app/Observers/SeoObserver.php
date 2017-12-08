<?php

namespace App\Observers;

use Illuminate\Database\Eloquent\Model;
use Auth;
use App\Models\Seo;

class SeoObserver
{
	/*
	* OBSERVER QUE S'IMPORTA A TOTS ELS MODELS ON ES VULGUI FER SERVIR. GESTIONAR AUTOMATICAMENT ELS SEOS PER A TOTS ELS MODELS (SIGUI QUIN SIGUI) QUE TINGUI EL SEGÜENT A LES CAPÇALERES DEL RESPECTIU MODEL

	* use App\Traits\SeoObservantTrait; <- a la capçalera
	* use SeoObservantTrait; <- dins la classe
	*/
	protected $modelFillables;

    public function created($model)
    {
		$slug = $this->getSlugable($model);
		$description = $this->getDescriptableable($model);

		$seo = new Seo();
		$seo->seoable_id = $model->id;
		$seo->seoable_type = get_class($model);
		$seo->setTranslation('slug', $model->locale, str_slug($slug));
		$seo->setTranslation('title', $model->locale, $slug);
		$seo->setTranslation('description', $model->locale, strip_tags($description));
		$seo->setTranslation('keywords', $model->locale, $slug);
		$seo->setTranslation('og_title', $model->locale, $slug);
		$seo->setTranslation('og_description', $model->locale, strip_tags($description));
		$seo->save();
    }

	public function updated($model)
    {
        $slug = $this->getSlugable($model);
		$description = $this->getDescriptableable($model);

		if (empty($model->seo)) {
			$seo = new Seo();
			$seo->seoable_id = $model->id;
			$seo->seoable_type = get_class($model);
			$seo->setTranslation('keywords', $model->locale, $slug);
		}
		else{
			$seo = Seo::find($model->seo->id);
		}
		$seo->setTranslation('slug', $model->locale, str_slug($slug));
		$seo->setTranslation('title', $model->locale, $slug);
		$seo->setTranslation('description', $model->locale, strip_tags($description));
		$seo->setTranslation('og_title', $model->locale, $slug);
		$seo->setTranslation('og_description', $model->locale, strip_tags($description));
		$seo->save();
    }

	public function getSlugable($model)
	{
		$this->modelFillables = $model->getFillable();

		if (in_array('titol', $this->modelFillables)) {
			return $model->titol;
		}
		elseif (in_array('nom', $this->modelFillables)) {
			return $model->nom;
		}
		elseif (in_array('title', $this->modelFillables)) {
			return $model->title;
		}
		elseif (in_array('name', $this->modelFillables)) {
			return $model->name;
		}
	}

	public function getDescriptableable($model)
	{
		$this->modelFillables = $model->getFillable();

		if (in_array('descripcio', $this->modelFillables)) {
			return $model->descripcio;
		}
		elseif (in_array('text', $this->modelFillables)) {
			return $model->text;
		}
		elseif (in_array('description', $this->modelFillables)) {
			return $model->description;
		}
		elseif (in_array('entrada', $this->modelFillables)) {
			return $model->entrada;
		}
	}
}
