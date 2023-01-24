<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">path</th>
    </tr>
    </thead>
    <tbody>
    @foreach($images as $image )
        <tr>
            <th scope="row">{{$image->id}}</th>
            <td><img src="{{asset('images/' . $image->path)}}" width="20px" height="20px"></td>
        </tr>
    @endforeach
    </tbody>
</table>


