<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\SeoRequest as StoreRequest;
use App\Http\Requests\SeoRequest as UpdateRequest;

class SeoCrudController extends CrudController
{
    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Seo');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/seo');
        $this->crud->setEntityNameStrings('seo', 'seos');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
		$this->crud->setColumns([
			[
                'name'  => 'id',
                'label' => trans('admin.id'),
                'type'  => 'number',
            ],
			[
                'name'  => 'pagina',
                'label' => trans('admin.pagina'),
                'type'  => 'text',
            ],
			[
                'name'  => 'title',
                'label' => trans('admin.title'),
                'type'  => 'text',
            ],
			[
                'name'  => 'description',
                'label' => trans('admin.description'),
                'type'  => 'text',
            ],
			[
                'name'  => 'keywords',
                'label' => trans('admin.keywords'),
                'type'  => 'text'
            ]
		]);

		$this->crud->addFields([
			[
                'name'  => 'slug',
                'label' => trans('admin.slug'),
                'type'  => 'text',
            ],
			[
				'label' => trans('admin.og_image'),
				'name' => "og_image",
				'type' => 'image',
				'upload' => true,
				'crop' => true,
				'aspect_ratio' => 0,
            ],
			[
                'name'  => 'og_url',
                'label' => trans('admin.og_url'),
                'type'  => 'text',
            ],
			[
                'name'  => 'title',
                'label' => trans('admin.title'),
                'type'  => 'text',
            ],
			[
                'name'  => 'description',
                'label' => trans('admin.description'),
                'type'  => 'tinymce',
            ],
			[
                'name'  => 'keywords',
                'label' => trans('admin.keywords'),
                'type'  => 'text',
            ],
			[
                'name'  => 'og_title',
                'label' => trans('admin.og_title'),
                'type'  => 'text',
            ],
			[
                'name'  => 'og_description',
                'label' => trans('admin.og_description'),
                'type'  => 'tinymce',
            ],
			[
                'name'  => 'ordre',
                'label' => trans('admin.ordre'),
                'type'  => 'number',
            ],
			[
			    'name' 	=> 'publicat',
			    'label' => trans('admin.publicat'),
			    'type' 	=> 'radio',
			    // optionally override the Yes/No texts
			    'options' => [0 => trans('admin.no'), 1 => trans('admin.si')],
				'inline'    => true, // show the radios all on the same line?
			],
		]);

        $this->crud->denyAccess(['create', 'delete']);

		//Forcem que al admin de Seo per defecte sempre sigui guardar i tornar. En aquest moment no hi ha cap eina ni funció per eliminar accions de save.
		$this->setSaveAction('save_and_back');

        $this->crud->addClause('where', 'pagina', '!=', null);
        $this->crud->addClause('where', 'pagina', '!=', '');
    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry

		if ($request->save_action == 'save_and_back' && !empty($this->crud->entry->seoable_type)) {
			$model = $this->crud->entry->seoable_type;
			$modelUrl = strtolower(str_replace('App\Models\\', '', $model));

			if ($modelUrl == 'producto') {
				$obj = new $model;
				$producte = $obj->find($this->crud->entry->seoable_id);
				$redirect_location->setTargetUrl(url('admin/'.$modelUrl.'?familia_id='.$producte->familia_id));
			}
			else{
				$redirect_location->setTargetUrl(url('admin/'.$modelUrl));
			}
		}

        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry

		if ($request->save_action == 'save_and_back' && !empty($this->crud->entry->seoable_type)) {
			$model = $this->crud->entry->seoable_type;
			$modelUrl = strtolower(str_replace('App\Models\\', '', $model));

			if ($modelUrl == 'producto') {
				$obj = new $model;
				$producte = $obj->find($this->crud->entry->seoable_id);
				$redirect_location->setTargetUrl(url('admin/'.$modelUrl.'?familia_id='.$producte->familia_id));
			}
			else{
				$redirect_location->setTargetUrl(url('admin/'.$modelUrl));
			}
		}

        return $redirect_location;
    }
}
