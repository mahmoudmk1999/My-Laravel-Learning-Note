@extends('layout')
@section('title')
    Index
@endsection

@section('table')
<div class="container">
    <table class="table table-striped table-hover mt-5">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Title</th>
            <th scope="col">Body</th>
            <th scope="col">Processes</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
        <tr>
            <th scope="row">{{$post->id}}</th>
            <td>{{$post->title}}</td>
            <td>{{$post->body}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
