@extends('layouts.master')

@section('content')
<div class="container">
<div class="row align-items-center">
  <div class="col-md-8 mx-auto">
    <h1 class="my-4 text-center" style="color: red">Welcome Home </h1>

    <div class="row">
    @foreach ($posts as $post)
      <div class="text-center col-md-4">
        <div class="card" >
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $post->title }}</h6>
            <p class="card-text">{{ $post->body }}</p>
            <a href="/posts/{{ $post->id }}" class="card-link">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted by <a href="#">{{ $post->user->name }} </a>
          </div>
        </div>
      </div>
    @endforeach
    </div>


  </div>
  </div>
</div>
</div>

@endsection
