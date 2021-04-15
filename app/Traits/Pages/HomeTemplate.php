<?php

namespace App\Traits\Pages;

trait HomeTemplate
{
	private function home()
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
