<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Campaign;
use Validator;
use Auth;
use File;
use Image;
use Hash;
use Session;

class AccountController extends Controller
{

	function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{
        $entries = Campaign::where('active', '=', 1)
            ->where('public', '=', 1)
            ->orderBy('advertise_credits', 'desc')
            ->paginate(20);

		return view('frontend.account.index',['entries' => $entries]);
	}

	public function update(Request $request)
	{
		$this->validate($request, [
			'username'  => 'required|unique:users,username,' . Auth::user()->id,
			'photo' 	=> 'mimes:jpeg,gif,bmp,png',
		]);

        $entry = Auth::user();

        $entry->username = $request->username;

        if ($request->has('password')) {

			$this->validate($request, [
			'password_confirmation'  => 'required'
			]);
		
            $entry->password = Hash::make((string)$request->password);
        }

        // Uploading photo
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');

            if ($file->isValid()) {
                $path 	= 'uploads/users/photos/' . base64_encode($entry->id) . '/';
                $name	= $file->getClientOriginalName();

                // deleting old if exists
                File::deleteDirectory($path);

                // creating directories
                File::makeDirectory($path . 'default', 0777, true, true);

                // Save
                $file->move($path . 'default/', $name);

                // Resize if needed
                if (Image::make($path . 'default/' . $name)->width() > 200)
                    Image::make($path . 'default/' . $name)->widen(200)->save();

                // Assign images
                $entry->photo = $path . 'default/' . $name;
            }
        }

        $entry->save();
		
		Session::flash('success','Profile updated successfully.');
		
        return redirect()->route('account.index');
    }
}
