<?php

namespace App\Http\Controllers;

use Jenssegers\Agent\Agent;
use App\Models\Pagina;

class PaginaController extends Controller
{
	protected $mobile = false;

	public function __construct(){
		$agent = new Agent();
		$this->mobile = ($agent->isMobile() || $agent->isTablet());
	}

    public function index($slug)
    {
		return view('pages.building', [
			'mobile' => $this->mobile
		]);

        $page = Pagina::where('slug', $slug)->first();

        if (!$page)
        {
            abort(404, 'Por favor regrese a nuestra <a href="'.url('').'">página de inicio</a>.');
        }

        return view('pages.'.$slug, [
			'page' => $page,
			'mobile' => $this->mobile
		]);
    }

	public function home(){
		return view('pages.home', [
			'mobile' => $this->mobile
		]);
	}
}
