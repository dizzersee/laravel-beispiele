@extends('master_layout')

@section('title', 'Post View')

@section('content')

    <div>
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->created_at }}</p>
        <p>{{ $post->content }}</p>

    </div>

@endsection
