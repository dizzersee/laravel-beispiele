<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function viewPost()
    {
        // Punkt statt Slash! Ohne Dateiendung!

        return view('posts_view');
    }
}
