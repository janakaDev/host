<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Input;
class UploadController extends Controller
{

	public function upload(){

		if(Input::hasFile('file'))
		{
				$file = Input::file('file');
				$file->move('images',$file->getClientOriginalName());
				$path = Input::file('file')->getRealPath();
		}

		return view('home');
	}

}	
