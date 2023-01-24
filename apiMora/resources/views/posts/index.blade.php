@extends('posts.layout')

@section('title')
    Index
@endsection

@section('content')
    <div class="container mt-5">
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Body</th>
            <th scope="col">Created_at</th>
            <th scope="col">Processes</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
        <tr>
            <th scope="row">{{$post->id}}</th>
            <td>{{$post->title}}</td>
            <td>{{$post->body}}</td>
            <td>{{$post->created_at}}</td>
            <td ><a  href="{{route('posts.edit',$post->id)}}" class="btn btn-primary">Edit</a>
                <form action="{{route('posts.destroy',$post->id)}}" method="POST" >
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    </div>
@endsection
