<h1>Show All Posts Soft Delete</h1>

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
                <a href="{{route('post.restore',$post->id)}}">Restore</a>
                <form action="{{route('post.forcedelete',$post->id)}}" method="get">
                    @csrf
                    <button type="submit">Delete</button>
                </form>
            </td>

        </tr>
    @endforeach
</table>
