@extends('master_layout')

@section('title', 'Create a new post')

@section('content')

    <h1>Neuen Post erstellen</h1>

    <form method="POST" action="{{ route('create-post') }}">
        @csrf

        <input type="text" name="title" placeholder="Title">
        <textarea name="content" placeholder="Content"></textarea>

        <button type="submit">Post erstellen</button>
    </form>

@endsection
