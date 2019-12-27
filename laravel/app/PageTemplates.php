<?php

namespace App;

trait PageTemplates
{
	protected $content_tab = 'Contenidos';

	use Traits\Pages\HomeTemplate;
	use Traits\Pages\QuienesSomosTemplate;
	use Traits\Pages\MMRaLaCartaTemplate;
	use Traits\Pages\ProgramacionTemplate;
	use Traits\Pages\ContactanosTemplate;
	use Traits\Pages\AppsDescargaTemplate;
	use Traits\Pages\RedEmisorasTemplate;
	use Traits\Pages\ColaboraConMMRTemplate;
}
