<?php

namespace App\Traits\Pages;

trait ContactanosTemplate
{
	private function contactanos()
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
