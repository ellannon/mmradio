<?php

namespace App\Traits\Pages;

trait QuienesSomosTemplate
{
	private function quienes_somos()
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
