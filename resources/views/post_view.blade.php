@extends('master_layout')

@section('title', 'Post View')

@section('content')

    <div>
        <h1>Post:</h1>

        @if($showPost)
            <p>{{ dump($post) }}</p>
        @else
            <p>Post not found</p>
        @endif


    </div>

@endsection
