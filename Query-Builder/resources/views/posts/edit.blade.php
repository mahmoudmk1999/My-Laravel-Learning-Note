<h1>Edit Post</h1>
<form action="{{route('post.update',$post->id)}}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{$post->title}}"><br><br>
    <input type="text" name="body" value="{{$post->body}}"><br><br>
    <button type="submit">Submit</button>
</form>
