@extends('master_layout')

@section('content')
    <h1>All Posts</h1>
    <div class="main-content">
        <ul>
            @foreach ($posts as $post)
                <li>

                    {{--
                    <a href="{{ route('single_post', ['id' => $post->id]) }}">
                        {{ $post->title }}
                    </a>
                    --}}

                    <h3>
                        <a href="/view-post/{{$post->id}}">
                            {{$post->title}}
                        </a>
                    </h3>
                    <p>{{$post->created_at->format('d/m/Y')}}</p>
                    <p>{{$post->content}}</p>


                </li>
            @endforeach
        </ul>
    </div>


@endsection
