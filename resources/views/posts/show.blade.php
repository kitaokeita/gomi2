@extends('../layouts/layout')
@extends('../layouts/app')


@section('content')
<div class="container mt-4">
  <div class="border p-4">
    <h1 class="h5 mb-4">
      {{$post-title}}

    </h1>

    <p class="mb-5">
    {!! nl2br(e($post->body))!!}
    </p>

    <section>
      <h2 class="h5 mb-4">
      コメント
      </h2>

    </section>

  </div>

</div>

@section
