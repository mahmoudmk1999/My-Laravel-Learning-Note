<h1>Show All Posts</h1>

<table>
    <th>id</th>
    <th>Title</th>
    <th>Body</th>
    <th>Possesses</th>
    @foreach($posts as $post)
    <tr>
        <td>{{$post->id}}</td>
        <td>{{$post->title}}</td>
        <td>{{$post->body}}</td>
        <td>
            <a href="{{route('posts.edit',$post->id)}}">Edit</a>
            <form action="{{route('posts.destroy',$post->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Soft Delete</button>
            </form>
        </td>

    </tr>
    @endforeach
</table>
