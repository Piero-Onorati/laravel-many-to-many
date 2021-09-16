@extends('layouts.app')

@section('content')

    <div class="container text-center">
       
        <div class="card-header my-4">
            <h3>Tags list</h3>
        </div>

            
        <div class="row row-cols-1 g-4">

        @foreach ($tags as $tag)
        <div class="col text-center">  
            <p>
                <button class="btn btn-dark position-relative" style="width: 18rem;" type="button" data-bs-toggle="collapse" 
                    data-bs-target="#tag{{$loop->iteration}}" aria-expanded="false" aria-controls="collapseExample">
                    <i class="bi bi-bookmark-plus px-2"></i>{{$tag->name}}
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        {{count($tag->posts)}}+
                    </span>
              </button>
            </p>
            <div class="collapse pb-3" id="tag{{$loop->iteration}}">
              <div class="card card-body">
                <table class="table table-hover">
                    <tbody>
                        @forelse ($tag->posts as $post)
                        <tr>
                            <td>
                                <a href="{{route('admin.posts.show', $post->id)}}">
                                    <i class="bi bi-file-text"></i>
                                    {{$post->title}}
                                </a>
                            </td>
                        @empty
                            <td>There are not posts with this category. <a href="{{route('admin.posts.create')}}" class="link-dark">Write it now!</a></td>
                        </tr>
                        @endforelse 
                    </tbody>
                </table>
              </div>
            </div>

        </div>
        @endforeach
        
        </div>

    </div>

   </div>
   
@endsection