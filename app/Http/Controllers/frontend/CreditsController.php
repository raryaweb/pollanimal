<?php

namespace App\Http\Controllers\frontend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Setting;
use Auth;
use Session;

class CreditsController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{
		return view('frontend.credits.index');
	}

	public function CardForm(Request $request)
	{
		return view('frontend.credits.payment', ['amount' => $request->get('amount'), 'credit_quantity' => $request->get('credit_quantity')]);
	}

}