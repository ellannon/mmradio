<?php

namespace App\Traits\Pages;

trait RedEmisorasTemplate
{
	private function red_de_emisoras_fm()
	{
		$this->crud->addField([
			'name' => 'content',
			'label' => 'Contenidos',
			'type' => 'wysiwyg',
			'placeholder' => 'Your content here',
			'tab' => $this->content_tab,
		]);
		$this->crud->addField([
			'name' => 'emisoras',
			'type' => 'table',
			'label' => 'Lista de emisoras',
			'entity_singular' => 'emisora', // used on the "Add X" button

			'columns' => [
				'anfitrion' => 'ANFITRION',
				'zona' => 'ZONA',
				'pais' => 'PAIS',
				'frecuencia' => 'FRECUENCIA',
				'onda' => 'ONDA'
			],
			// 'max' => 8, // maximum rows allowed in the table
			'min' => 1, // minimum rows allowed in the table
			'fake' => true,
			'store_in' => 'extras',
			'tab' => $this->content_tab,
		]);
	}
}
