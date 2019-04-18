@extends('../layouts/layout')
@extends('../layouts/app')
@section('content')

  <div class="mb-4">
    <a href="{{route('posts.create')}}"class="btn btn-primary">
     投稿を新規作成する
    </a>

  </div>
  <div class="container mt-4">
    @foreach ($posts as $post)
     <div class="card mb-4">
       {{$post->title}}
     </div>
     <div class="card mb-4">
       {{$user->email}}}
     </div>
     <div class="card-body">
       <p class="card-text">
        {!! nl2br(e(str_limit($post->body, 200))) !!}
      </p>
     </div>
     <div class="card-footer">
       <span class="mr-2">
         投稿日時{{$post->created_at->format('Y.m.d')}}
       </span>
     </div>
  </div>
  @endforeach
</div>
@endsection
