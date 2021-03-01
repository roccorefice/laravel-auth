 @extends('layouts.app')

 @section('content')
    <h1>All posts for blog</h1>

    @foreach ($posts as $post)

        <div class="card my-5">
            <img class="card-img-top" src="" alt="">
            <div class="card-body">
                <h4 class="card-title">{{ $post->title }}</h4>
                <p class="card-text">{{ $post->body }}</p>
            </div>
        </div>
    @endforeach

 @endsection