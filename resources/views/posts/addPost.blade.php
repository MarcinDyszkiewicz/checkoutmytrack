@extends('layout')

@section('content')

    {{--{!! Html::style('css/select2.css') !!}--}}
    <div class="'row">
        <h1>Create New Post</h1>
        <hr>
        {!! Form::open(array('action' => 'PostController@postStore', 'files' => true)) !!}
        {!! Form::label('title', 'Title:')!!}
        {!! Form::text('title', null) !!}
        {!! Form::label('') !!}

        {!! Form::label('content_main', 'Post Content:')!!}
        {!! Form::textarea('content_main', null) !!}

        {!! Form::label('alias', 'url')!!}
        {!! Form::text('alias', null) !!}

        {!! Form::label('meta_img', 'Upload Head Image:')!!}
        {!! Form::file('meta_img') !!}

        {!! Form::label('img', 'Upload Image:')!!}
        {!! Form::file('img') !!}

        {!! Form::label('meta_title', 'meta_title:')!!}
        {!! Form::text('meta_title', null) !!}

        {{--{{Form::label('tags', 'Tags:')}}--}}
        {{--<select class="form-control select2-multi" name="tags[]" multiple="multiple">--}}
            {{--@foreach($tags as $tag)--}}
                {{--<option value='{{$tag->id}}'>{{$tag->name}}</option>--}}
            {{--@endforeach--}}
        {{--</select>--}}

        {!! Form::submit('Add Waiting Post') !!}

        {!! Form::close() !!}
        {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}
        {{--{!! Html::script('js/select2.js') !!}--}}
    </div>

    {{--<script type="text/javascript">--}}
        {{--$('.select2-multi').select2();--}}
    {{--</script>--}}

    @endsection