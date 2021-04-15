<?php

namespace App\Traits\Pages;

trait ProgramacionTemplate
{
	private function programacion()
	{
		$this->crud->addField([
			'name' => 'programacion',
			'type' => 'table',
			'label' => 'Tabla de contenidos',
			'entity_singular' => 'programa', // used on the "Add X" button
			'columns' => [
				'lunes' => 'Lunes',
				'martes' => 'Martes',
				'miercoles' => 'Miércoles',
				'jueves' => 'Jueves',
				'viernes' => 'Viernes',
				'sabado' => 'Sábado',
				'domingo' => 'Domingo'
			],
			// 'max' => 8, // maximum rows allowed in the table
			'min' => 1, // minimum rows allowed in the table
			'fake' => true,
			'store_in' => 'extras',
			'tab' => $this->content_tab,
		]);

		$this->crud->addField([
			'name' => 'content',
			'label' => 'Contenidos',
			'type' => 'wysiwyg',
			'placeholder' => 'Your content here',
			'tab' => $this->content_tab,
		]);
	}
}
