<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use DB;
use Input;

class ArticleController extends Controller
{
    public function show($id)
    {
        $post = Post::findOrFail($id);

        $post->views++;
        $post->save();
        
        return view('posts.full_article',['post'=>$post]);
    }
}
