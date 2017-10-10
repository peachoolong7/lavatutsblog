@extends('main')


@section('title',' | Edit Post')

@section('content')

    {!!Form::model($post,['route'=>['posts.update',$post->id],'method'=>'PUT'])!!}
    <div class="col-md-8">
        {{Form::label('title','Title:')}}
        {{Form::text('title',null,["class"=>'form-control'])}}

        {{Form::label('slug','Slug:')}}
        {{Form::text('slug',null,["class"=>'form-control'])}}

        {{Form::label('title','Message:')}}
        {{Form::textarea('body',null,["class"=>'form-control'])}}
    </div>
    <div class="col-md-4">
        <div class="well">
            <dl class="dl-horizontal">
                <label>Url Slug:</label>
                <p><a href="{{ url($post->slug) }}">{{ url($post->slug) }}</a></p>
            </dl>
            <dl class="dl-horizontal">
                <label>Created at:</label>
                <p>{{date('M j, Y h:ia', strtotime($post->created_at))}}</p>
            </dl>
            <dl class="dl-horizontal">
                <label>Last Updated:</label>
                <p>{{date('M j, Y h:ia', strtotime($post->updated_at))}}</p>
            </dl>
            <hr>
            <div class="row">
                <div class="col-sm-6">

                    {!! Html::linkRoute('posts.show','Cancel', array($post->id),array('class' => 'btn btn-block btn-danger')) !!}

                </div>
                <div class="col-sm-6">

                    {{Form::submit('Save Changes',array('class' => 'btn btn-block btn-success'))}}
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}


@endsection