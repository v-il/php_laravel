@extends('layouts.main')
@section('title', 'Edit post')

@section('content')
    <h3>Edit Post by {{$post->author_email}}</h3>
    <form action="{{route('update', $post->id)}}" method="POST">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Title"
                   value="{{$post->title}}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Post text</label>
            <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="3">{{$post->text}}</textarea>
        </div>

        <button type="submit" class="d-inline btn btn-primary mb-3">Update post</button>
        <a href="{{route('index')}}" class="btn btn-secondary mb-3">Cancel</a>
    </form>
@endsection
