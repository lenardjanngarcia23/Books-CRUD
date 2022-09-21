@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <h1>Post page</h1>
            {!! Form::open(['action' => 'App\Http\Controllers\PostController@store']) !!}
            @csrf
            <div class="form-group">
                {!! Form::label('title', 'Title:') !!}
                {!! Form::text('title', null, ['class'=>'form-control']) !!}

                {!! Form::label('body', 'Body:') !!}
                {!! Form::text('body', null, ['class'=>'form-control']) !!}
            </div>
            <div class="mb-6">
                <label class="block">
                    <span class="text-gray-700">Tag</span>
                    <select name="tags[]" class="block w-full mt-1" multiple>
                        @foreach ($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                        @endforeach
                    </select>
                </label>
            </div>

            <div class="form-group">

                {!! Form::submit('Post', ['class'=>'btn btn-success']) !!}

            </div>
            {!! Form::close() !!}
        </div>

    </div>
    </div>
@endsection
