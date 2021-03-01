@extends('layouts.dashboard')
@section('content')
<h1>EDIT POST:  "{{$post->title}}" </h1>

{{-- error --}}
@include('partials.error')

<form action="{{ route('admin.posts.update', ['post'=> $post->slug]) }}" method="post">

    @csrf
    @method('PUT')

    {{-- title --}}
    <div class="form-group">
        <label for="title">Title</label>
        <input class="form-control" type="text" name="title" id="title" value="{{$post->title}}">
    </div>
    @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    {{-- body --}}
    <div class="form-group">
        <label for="body">Body</label>
        <textarea class="form-control" name="body" id="body" rows="3">{{$post->body}}</textarea>
    </div>
    @error('body')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    
    <button type="submit" class="btn btn-primary">Submit</button>

</form>




@endsection