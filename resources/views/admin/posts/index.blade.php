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
                {{-- view --}}
                <a href="{{route('admin.posts.show', ['post' => $post->slug])}}" class="btn btn-primary p-1 m-1">View</a>

                {{-- edit --}}
                <a href="{{route('admin.posts.edit', ['post' => $post->slug])}}" class="btn btn-primary p-1 m-1">Edit
                </a>
                
                {{-- delete --}}
                <button type="button" class="btn btn-danger p-1 m-1" data-toggle="modal" data-target="#destroy-{{$post->slug}}">
                Delete
                </button>

                {{-- modal to delete post --}}
                <div class="modal fade" id="destroy-{{$post->slug}}" tabindex="-1" role="dialog" aria-labelledby="post-destroy-{{$post->slug}}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="post-destroy-{{$post->slug}}">Delete Post: "{{$post->title}}"?</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Are you sure?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                <form action="{{route('admin.posts.destroy', ['post' => $post->slug])}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        Yes
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
        @endforeach
        
    </tbody>
</table>
@endsection