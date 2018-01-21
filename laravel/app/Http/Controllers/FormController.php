<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
	public function contact(Request $request)
	{
		Mail::send('emails.email', ['data' => $request], function ($m) use ($request) {
            $m->from($request->email, 'MMRadio Contacto');

            $m->to('contact@mmradio.es')->subject('Contacto de '.$request->name);
        });

		return back()->with('status', 'Contacto enviado!');
	}

	public function colaborate(Request $request)
	{
		Mail::send('emails.email', ['data' => $request], function ($m) use ($request) {
            $m->from($request->email, 'MMRadio Colabora');

            $m->to('colaboradores@mmradio.es')->subject('Colaboración de '.$request->name);
        });

		return back()->with('status', 'Colaboración enviada!');
	}
}