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
        $this->data['pages'] = Page::where('slug', '<>', 'home')->get()->pluck('slug');
        $this->data['page'] = $page->withFakes();

        return view('pages.'.$page->template, $this->data);
    }
}
