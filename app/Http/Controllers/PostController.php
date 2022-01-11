<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getAllPosts(Request $request)
    {
        return Post::all();
    }

    public function createPost(Request $request)
    {
        if(!Auth::user()->can('create-posts')){
            return abort(422,['message'=> 'Nemate dozvolu.']);
        }

        return Post::all();
    }
}
