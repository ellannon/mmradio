<?php

namespace App\Traits\Pages;

trait AppsDescargaTemplate
{
	private function apps_de_descarga()
	{
		$this->crud->addField([
			'name' => 'content',
			'label' => 'Contenidos',
			'type' => 'wysiwyg',
			'placeholder' => 'Your content here',
			'tab' => $this->content_tab,
		]);
	}
}
