@extends('posts.layout')

@section('title')
    Edit
@endsection

@section('content')
    <div class="container mt-4">
        <form action="{{route('posts.update',$post->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" value="{{$post->title}}">
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                <textarea class="form-control" name="body" rows="3">{{$post->body}}</textarea>
            </div>
            <div>
                <button type="submit" class="btn btn-primary" >Submit</button>
            </div>
        </form>
    </div>
@endsection
