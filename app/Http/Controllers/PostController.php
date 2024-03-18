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

        $showPost = false;

        return view('post_view', [
            'post' => $post,
            'showPost' => $showPost
        ]);
    }

    public function createPost()
    {
        $post = new Post();
        $post->title = "Neuer Post";
        $post->content = "Lorem Ipsum Dolor";
        $post->save();

        return "Post erfolgreich erstellt!";
    }

    public function createPost2() {
        Post::create([
            'title' => 'Neuer Post von createPost2',
            'content' => 'Lorem Ipsum Dolor'
        ]);

        return "Post erfolgreich erstellt!";
    }

    public function viewAllPosts() {
        $posts = Post::all();
        return view('all_posts', [
            'posts' => $posts
        ]);

    }

}
