@extends('layouts.main')
@section('content')
    <a class="btn btn-secondary mb-4" href="{{route('index')}}">Home</a>
    <a class="btn btn-primary mb-4" href="{{route('create')}}">Create post</a>
    <form method="get" action="/">
        <div class="input-group mb-3 w-50">
            <input type="email" name="email" class="form-control" placeholder="E-mail">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit">Search</button>
            </div>
        </div>
    </form>

    </form>
    <div>{{$posts->withQueryString()->links()}}</div>

    @foreach($posts as $post)
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">{{$post->title}}</h5>
                <h6>Author: {{$post->author_email}}</h6>
                <p class="card-text">{{$post->text}}</p>
                <a class="btn btn-primary" href="{{route('edit', $post->id)}}">Edit</a>
            </div>
        </div>
    @endforeach


@endsection
