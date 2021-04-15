<?php

namespace App\Http\Controllers\Admin;

use App\PageTemplates;
// VALIDATION: change the requests to match your own file names if you need form validation
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\PageManager\app\Http\Requests\PageRequest;
use Str;

class PageCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation { create as traitCreate; }
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation { edit as traitEdit; }
    use \Backpack\CRUD\app\Http\Controllers\Operations\CloneOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use PageTemplates;

	protected $tab = 'Admin';
	protected $seo_tab = 'SEO';

    public function setup()
    {
        $this->crud->setModel(config('backpack.pagemanager.page_model_class', 'Backpack\PageManager\app\Models\Page'));
        $this->crud->setRoute(config('backpack.base.route_prefix').'/page');
        $this->crud->setEntityNameStrings(trans('backpack::pagemanager.page'), trans('backpack::pagemanager.pages'));
    }

    protected function setupListOperation()
    {
        $this->crud->addColumn([
            'name' => 'name',
            'label' => trans('backpack::pagemanager.name'),
        ]);
        $this->crud->addColumn([
            'name' => 'template',
            'label' => trans('backpack::pagemanager.template'),
            'type' => 'model_function',
            'function_name' => 'getTemplateName',
        ]);
        $this->crud->addColumn([
            'name' => 'slug',
            'label' => trans('backpack::pagemanager.slug'),
        ]);
        $this->crud->addButtonFromModelFunction('line', 'open', 'getOpenButton', 'beginning');

		$this->crud->orderBy('id');

		$this->crud->removeButton('delete');
		$this->crud->removeButton('clone');
    }

    // -----------------------------------------------
    // Overwrites of CrudController
    // -----------------------------------------------

    protected function setupCreateOperation()
    {
        // Note:
        // - default fields, that all templates are using, are set using $this->addDefaultPageFields();
        // - template-specific fields are set per-template, in the PageTemplates trait;

		$this->useTemplate(\Request::input('template'));
		$this->addDefaultPageFields(\Request::input('template'));

        $this->crud->setValidation(PageRequest::class);
    }

    protected function setupUpdateOperation()
    {
        // if the template in the GET parameter is missing, figure it out from the db
        $template = \Request::input('template') ?? $this->crud->getCurrentEntry()->template;

		$this->useTemplate($template);
        $this->addDefaultPageFields($template);

        $this->crud->setValidation(PageRequest::class);
    }

    // -----------------------------------------------
    // Methods that are particular to the PageManager.
    // -----------------------------------------------

    /**
     * Populate the create/update forms with basic fields, that all pages need.
     *
     * @param string $template The name of the template that should be used in the current form.
     */
    public function addDefaultPageFields($template = false)
    {
        $this->crud->addField([
            'name' => 'template',
            'label' => trans('backpack::pagemanager.template'),
            'type' => 'select_page_template',
            'view_namespace' => file_exists(resource_path('views/vendor/backpack/crud/fields/select_page_template.blade.php')) ? null : 'pagemanager::fields',
            'options' => $this->getTemplatesArray(),
            'value' => $template,
			'tab' => $this->tab,
            'allows_null' => false,
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6',
            ],
        ]);
        $this->crud->addField([
            'name' => 'name',
            'label' => trans('backpack::pagemanager.page_name'),
            'type' => 'text',
			'tab' => $this->tab,
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6',
            ],
            // 'disabled' => 'disabled'
        ]);
        $this->crud->addField([
            'name' => 'title',
            'label' => trans('backpack::pagemanager.page_title'),
            'type' => 'text',
			'tab' => $this->tab,
            // 'disabled' => 'disabled'
        ]);
        $this->crud->addField([
            'name' => 'slug',
            'label' => trans('backpack::pagemanager.page_slug'),
            'type' => 'text',
			'tab' => $this->tab,
            'hint' => trans('backpack::pagemanager.page_slug_hint'),
            // 'disabled' => 'disabled'
        ]);

		// BLOQUE SEO
		$this->crud->addField([
			'name' => 'meta_title',
			'label' => 'Meta Title',
			'tab' => $this->seo_tab,
			'fake' => true,
			'store_in' => 'extras',
		]);
		$this->crud->addField([
			'name' => 'meta_description',
			'label' => 'Meta Description',
			'tab' => $this->seo_tab,
			'fake' => true,
			'store_in' => 'extras',
		]);
		$this->crud->addField([
			'name' => 'meta_keywords',
			'type' => 'textarea',
			'label' => 'Meta Keywords',
			'tab' => $this->seo_tab,
			'fake' => true,
			'store_in' => 'extras',
		]);
    }

    /**
     * Add the fields defined for a specific template.
     *
     * @param  string $template_name The name of the template that should be used in the current form.
     */
    public function useTemplate($template_name = false)
    {
        $templates = $this->getTemplates();

        // set the default template
        if ($template_name == false) {
            $template_name = $templates[0]->name;
        }

        // actually use the template
        if ($template_name) {
            $this->{$template_name}();
        }
    }

    /**
     * Get all defined templates.
     */
    public function getTemplates($template_name = false)
    {
        $templates_array = [];

        $templates_trait = new \ReflectionClass('App\PageTemplates');
        $templates = $templates_trait->getMethods(\ReflectionMethod::IS_PRIVATE);

        if (! count($templates)) {
            abort(503, trans('backpack::pagemanager.template_not_found'));
        }

        return $templates;
    }

    /**
     * Get all defined template as an array.
     *
     * Used to populate the template dropdown in the create/update forms.
     */
    public function getTemplatesArray()
    {
        $templates = $this->getTemplates();

        foreach ($templates as $template) {
            $templates_array[$template->name] = str_replace('_', ' ', Str::title($template->name));
        }

        return $templates_array;
    }
}
