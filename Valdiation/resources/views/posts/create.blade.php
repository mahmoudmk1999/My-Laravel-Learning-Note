@extends('layout')
@section('title')
Create
@endsection

@section('form')
    <div class="container">
        <form action="{{route('posts.store')}}" method="POST">
            @csrf
        <div class="mb-3 mt-5">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" value="{{old('title')}}">
        @error('title')
        <div class="alert alert-danger mt-2">{{$message}}</div>
        @enderror
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <textarea class="form-control" name="body" id="body" rows="3" >{{old('body')}}</textarea>
        @error('body')
        <div class="alert alert-danger mt-2">{{$message}}</div>
        @enderror
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
    </div>

{{--    @if ($errors->any())--}}
{{--        <div class="alert alert-danger">--}}
{{--            <ul>--}}
{{--                @foreach ($errors->all() as $error)--}}
{{--                    <li>{{ $error }}</li>--}}
{{--                @endforeach--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    @endif--}}
@endsection
