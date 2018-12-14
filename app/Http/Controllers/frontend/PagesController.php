<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Campaign;
use App\Page;

class PagesController extends Controller
{
	public function index($slug)
	{
        $page = Page::where('slug', $slug)->first();

        if ($page) {
            return view('frontend.pages.index', [
                'page' => $page
            ]);
        } else {
            return view('frontend.pages.404');
        }
	}

    public function duk1()
    {
        return view('frontend.pages.duk');
    }

    public function kontaktai1()
    {
        return view('frontend.pages.kontaktai');
    }

    public function naudojimosi_taisykles1()
    {
        return view('frontend.pages.naudojimosi-taisykles');
    }

    public function terms_condition()
    {
        return view('frontend.pages.terms-condition');
    }

    public function all_surveys()
    {
        $public_entries = Campaign::where('active', 1)
               ->orderBy('id', 'desc')
               ->take(50)
               ->get();
        return view('frontend.pages.all-serveys', ['public_entries'    => $public_entries]);
    }

}
