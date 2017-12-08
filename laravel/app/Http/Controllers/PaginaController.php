<?php

namespace App\Http\Controllers;

use App\Models\Pagina;

class PaginaController extends Controller
{
    public function index($slug)
    {
        $page = Pagina::findBySlug($slug);

        if (!$page)
        {
            abort(404, 'Por favor regrese a nuestra <a href="'.url('').'">página de inicio</a>.');
        }

        return view('pages.'.$slug, $page);
    }

	public function home(){
		return view('pages.home');
	}
}
