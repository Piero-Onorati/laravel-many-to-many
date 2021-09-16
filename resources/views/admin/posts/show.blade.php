@extends('layouts.app')

@section('content')

<div class="container pt-4">

  <!-- start CARD -->
  <div class="card mb-3">

    {{-- card header --}}
    <div class="card-header">
      <h4 class="card-title">{{$post->title}}</h4>
    </div>

    {{-- Card body --}}
    <div class="card-body">
      <!--# Content #-->
      <p class="card-text">{{$post->content}}</p>

      <!--# List: CATEGORY + TAGS  #-->
      <ul class="list-group list-group-flush">
        <li class="list-group-item">
          @if ($post->category)
            <h5>Category: <span class="text-uppercase badge bg-light text-dark">{{$post->category->name}}</span></h5>
          @endif
        </li>
        <li class="list-group-item">
          @forelse ($post->tags as $tag)
            <h5 class="d-inline-block"><span class="badge bg-info text-dark">{{$tag->name}}</span></h5>
          @empty
          there are not tags      
          @endforelse
        </li>
      </ul>
    </div>

    {{-- card footer --}}
    <div class="card-footer text-muted">
      Written by: User
    </div>

  </div>
  <!-- end CARD -->

  <!-- BUTTONS -->
  <a href="{{route('admin.posts.edit', $post->id)}}" class="btn btn-primary">Edit Post</a>

  <a href="{{route('admin.posts.index')}}" class="btn btn-dark mx-3">Back to Posts List</a>

</div>
    
@endsection