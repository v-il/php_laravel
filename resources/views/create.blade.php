@extends('layouts.main')
@section('title', 'Create post')

@section('content')
    <h3>Add Post</h3>
    <form action="{{route('store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" name="author_email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Title">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Post text</label>
            <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <button type="submit" class="d-inline btn btn-primary mb-3">Create post</button>
        <a href="{{route('index')}}" class="btn btn-secondary mb-3">Cancel</a>

    </form>
@endsection
