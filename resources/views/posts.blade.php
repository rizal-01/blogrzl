@extends('blog.main')

@section('content')
    <div class="row justify-content-end my-3">
        <div class="col-md-4">
            <form action="/posts">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search" name="search" value="{{ request('search') }}">
                    <button class="btn btn-danger" type="submit">Search</button>
                  </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
    <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
        @if ($posts[0]->image)
            <div style="text-align: center">
                <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}" class="img-fluid">
            </div>
        @else
        <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
        @endif

        <div class="col-md px-0 text-center">
          <h1 class="display-4 fst-italic"><a href="/posts/{{ $posts[0]->slug }}"></a>{{ $posts[0]->title }}</h1>
          <p>
            <small class="text-muted">
            By . <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
            </small>
        </p>
          <p class="lead my-3">{{ $posts[0]->excerpt }}</p>
          <p class="lead mb-0"><a href="/posts/{{ $posts[0]->slug }}" class="text-white fw-bold text-decoration-none">Continue reading...</a></p>
        </div>
    </div>

    <div class="container">
        <div class="row mb-2">
            @foreach ($posts->skip(1) as $post)
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            @if ($post->image)
                            <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid rounded-start">
                            @else
                            <img src="https://source.unsplash.com/500x800?{{ $post->category->name }}" class="img-fluid rounded-start" alt="{{ $post->category->name }}">
                            @endif
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">{{ $post->excerpt }}</p>
                            <p class="card-text"><small class="text-muted">{{ $post->created_at->diffForHumans() }}</small></p>
                            <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    @else
    <p class="text-center fs-4">No post found.</p>
    @endif

    <div class="d-flex justify-content-end">
        {{ $posts->links() }}
    </div>

@endsection