@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}" >
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                            <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                        </div>
                    </div>

                </div>
            </div>
            <br>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No Post Found</p>
    @endif
@endsection