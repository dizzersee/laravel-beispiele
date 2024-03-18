<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function viewPost()
    {
        // Punkt statt Slash! Ohne Dateiendung!

        $post = new Post();

        return view('post_view', [
            'post' => $post
        ]);
    }
}
