@extends('main')


@section('title', ' | Home')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="jumbotron">
                    <h1>Welcome to our Blog</h1>
                    <p>Lalalalala lalala laa</p>
                    <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                @foreach($posts as $post)

                <div class="post">
                    <h3>{{$post->title}}</h3>
                    <p>{{substr($post->body,0,300)}}{{strlen($post->body)>300?"...":""}}</p>
                    <a href="{{url('blog/'.$post->slug)}}" class="btn btn-primary">Read More</a>
                </div>
                @endforeach
                    <div class="row">
                        <div class="col-md-12">{{
                        Html::linkRoute('posts.index','<< See All Posts',array(),
                        ['class'=>'btn btn-default btn-block btn-h1-spacing'])
                        }}</div>
                    </div>
            </div>
            <div class="col-md-3 col-md-offset-1"><h3>Sidebar</div>
        </div>


    </div>

@endsection