@extends('layouts.dashboard')
@section('content')
<h1>All posts for Admin</h1>

<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Slug</th>
            <th>Action</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
            
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->body }}</td>
            <td>{{ $post->slug }}</td>
            <td>
                <a href="{{route('admin.posts.show', ['post' => $post->slug])}}" class="btn btn-primary p-1 m-1">View</a>
                <a href="{{route('admin.posts.edit', ['post' => $post->id])}}" class="btn btn-primary p-1 m-1">Edit
                </a>
                <a href="#" class="btn btn-primary p-1 m-1">Delete</a>
            </td>
        </tr>
        @endforeach
        
    </tbody>
</table>
@endsection