<?php

namespace App\Traits\Pages;

trait MMRaLaCartaTemplate
{
	private function mmr_a_la_carta()
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
