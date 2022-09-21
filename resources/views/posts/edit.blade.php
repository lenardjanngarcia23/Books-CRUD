@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-3 lign-items-center">
        <div class="col-lg-12">
            <h1>Edit</h1>
            {!! Form::model($posts, ['method'=>'PUT', 'action' => ['App\Http\Controllers\PostController@update', $posts->id]]) !!}
            @csrf
            <div class="form-group w-25">
                {!! Form::label('title', 'Title:') !!}
                {!! Form::text('title', null, ['class'=>'form-control']) !!}

                {!! Form::label('body', 'Body:') !!}
                {!! Form::text('body', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group"  style="margin-top: 15px">
                {!! Form::submit('Update post', ['class'=>'btn btn-primary']) !!}

                {!! Form::open(['action' => ['App\Http\Controllers\PostController@destroy', $posts->id], 'method'=>'DELETE']) !!}
                    {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                {!! Form::close() !!}
            </div>
            {!! Form::close() !!}

            {{-- <div class="form-group"  style="margin-top: 15px">
            {!! Form::open(['action' => ['App\Http\Controllers\PostController@destroy', $posts->id], 'method'=>'DELETE']) !!}
                {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
            {!! Form::close() !!}
            </div> --}}

        </div>

    </div>
    </div>

@endsection
