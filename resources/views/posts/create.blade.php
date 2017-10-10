@extends('main')

@section('title',' | Create New Posts')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Write New Posts</h1>
            <hr>

            {!! Form::open(array('route'=>'posts.store')) !!}
            {{form::label('title','Title:')}}
            {{form::text('title',null,array('class'=>'form-control'))}}

            {{form::label('slug','Slug:')}}
            {{form::text('slug',null,array('class'=>'form-control', 'required'=>'','minlength'=>'5','maxlength'=>'255'))}}

            {{form::label('body','Posts Body')}}
            {{form::textarea('body',null,array('class'=>'form-control'))}}
            {{form::submit('Create Posts',array('class'=>'btn btn-success btn-lg btn-block'
            ,'style'=>'margin-top : 25px;'


            ))}}
            {!! Form::close() !!}
        </div>
    </div>


@endsection
