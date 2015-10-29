<?php
namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function contact()
    {
        return view('pages.contact');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postContact(Request $request)
    {
        $this->validate($request, [
            'name'      =>  'required',
            'email'     =>  'required|email',
            'website'   =>  'url',
            'message'   =>  'required',
        ]);

        Mail::send('emails.contact', $request->all(), function($message) {
            $message->to('contacto@comunidaddephp.org', 'Formulario de contacto')
                ->subject('[Comunidad de PHP] Formulario de contacto');
        });

        return redirect()->route('pages.contact')
                         ->withSuccess('¡Gracias! Nos pondremos en contacto contigo lo antes posible.');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function resources()
    {
        return view('pages.resources');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function whoAreWe()
    {
        return view('pages.whoarewe');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function calendar()
    {
        return view('pages.calendar');
    }
}