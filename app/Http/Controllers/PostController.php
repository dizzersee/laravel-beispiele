<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function createPost()
    {
        $post = new Post();
        $post->title = "Neuer Post vom User 1";
        $post->content = "Lorem Ipsum Dolor";
        // $post->save();

        $user = User::find(1);
        $user->posts()->save($post);

        $topics = Topic::all();
        $post->topics()->attach($topics);

        $post->topics()->detach(1);

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

        // TODO - Eager Loading for authors of posts!

        $posts = Post::all();
        return view('all_posts', [
            'posts' => $posts
        ]);
    }

    public function viewPost($id) {
        $post = Post::find($id);
        $topics = $post->topics;
        return view('post_view', [
            'post' => $post,
            'topics' => $topics
        ]);
    }

    public function tests() {
        $user = User::find(1);
        $posts = $user->posts;
        dump($posts);


        return "Post erfolgreich aktualisiert!";
    }
}
