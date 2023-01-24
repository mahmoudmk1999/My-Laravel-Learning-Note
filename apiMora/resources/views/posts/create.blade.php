@extends('posts.layout')

@section('title')
    Create
@endsection

@section('content')
    <div class="container mt-4">
        <form action="{{route('posts.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                <textarea class="form-control" name="body" rows="3"></textarea>
            </div>
            <div>
                <button type="submit" class="btn btn-primary" >Submit</button>
            </div>
        </form>
    </div>
@endsection
