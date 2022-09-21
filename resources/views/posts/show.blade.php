@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1 class="text-center">Posts</h1>
            <div class="col">

                @foreach ($posts as $post)
                    <h4><b>{{$post->title}}</b></h4>
                    <p>{{$post->body}}</p>

                    <a class="btn btn-warning text-light" href="{{ route('posts.edit', $post->id) }}">Edit</a>


                @endforeach
            </div>
        </div>
    </div>
@endsection
