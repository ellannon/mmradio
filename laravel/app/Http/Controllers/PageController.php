<?php

namespace App\Http\Controllers;

use Backpack\PageManager\app\Models\Page;
use Jenssegers\Agent\Agent;

class PageController extends Controller
{
	protected $mobile = false;

	public function __construct(){
		$agent = new Agent();
		$this->mobile = ($agent->isMobile() || $agent->isTablet());
	}

    public function index($slug = null)
    {
		if (empty($slug)) {
			$slug = 'home';
		}

        $page = Page::findBySlug($slug);

        if (!$page)
        {
            abort(404, 'Please go back to our <a href="'.url('').'">homepage</a>.');
        }

        $this->data['title'] = $page->title;
        $this->data['mobile'] = $this->mobile;
        $this->data['menus'] = Page::where('slug', '<>', 'home')->get()->pluck('slug');
        $this->data['page'] = $page->withFakes();

		switch ($page->id) {
			case 4:
				$this->data['dias'] = array('lunes' => [], 'martes' => [], 'miercoles' => [], 'jueves' => [], 'viernes' => [], 'sabado' => [], 'domingo' => []);
				$programacion = json_decode(json_decode($page->extras, true)['programacion'], true);
				foreach ($programacion as $programa) {
					foreach ($programa as $key => $value) {
						$this->data['dias'][$key][] = $value;
					}
				}
			break;
			case 7:
				$this->data['emisoras'] = array('onda' => [], 'frecuencia' => [], 'pais' => [], 'zona' => [], 'anfitrion' => []);
				$emisoras = json_decode(json_decode($page->extras, true)['emisoras'], true);
				foreach ($emisoras as $emisora) {
					foreach ($emisora as $key => $value) {
						$this->data['emisoras'][$key][] = $value;
					}
				}
			break;

			default: break;
		}

        return view('pages.'.$page->template, $this->data);
    }
}
