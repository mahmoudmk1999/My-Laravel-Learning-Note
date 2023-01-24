<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>index </title>
</head>
<body>

</body>
</html>
<h1 class="mb-5">All Posts</h1>
<div class="container">
    <a href="{{route('posts.delete.all')}}" class="btn btn-danger">Delete ALL</a>
    <a href="{{route('posts.delete.all.truncate')}}" class="btn btn-warning">Delete ALL Truncate</a>
<table class="table table-dark table-striped">
    <thead>
    <tr>
        <th scope="col">Id</th>
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
        <td>
            <a href="{{route('post.edit',$post->id)}}" class="btn btn-primary">Edit</a>
            <a href="{{route('post.delete',$post->id)}}" class="btn btn-danger">Delete</a>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
</div>
