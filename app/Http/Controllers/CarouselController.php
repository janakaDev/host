<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;

class CarouselController extends Controller
{
     public function carousel()
    {
        
    	$queries=Post::orderBy('id','desc')->take(4)->get();
        
        return view('posts.carouselsAll',['queries'=>$queries]);
    }
}
