<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Campaign;
use Illuminate\Http\Request;
use Mail;
class HomeController extends Controller
{
    public function index()
    {
        $entries = Campaign::where('advertise_results', '>', 0)
            ->where('active', '=', 1)
            ->where('public', '=', 1)
			->orderBy('advertise_results', 'desc')
            ->get();

			// print_r($entries);die();
        $public_entries = Campaign::recentPublic()->get();

        return view('frontend.home.index', [
            'entries'           => $entries,
            'public_entries'    => $public_entries
        ]);
    }
	
	public function send_email(Request $request){
		$data = [
		'form_type'=>$request->form_type,
		'email'=>$request->email,
		'name'=>$request->name,
		'txt_message'=>$request->massage

		];

			
		if($request->email)
		{
		Mail::send('emails.contact.contact',$data, function ($message) use($request)
		{
		$message->from('noreply@pollanimal.com', 'Pollanimal.com');
		$message->to(env("App_CONTACT_EMAIL"));
		$message->subject('New Inquiry from '.$request->name);
		});
		
		return back()->with("data","1");
		
		}
	}
}
