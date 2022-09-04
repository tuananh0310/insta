@extends('layouts.app')

@section('content')
<div class="container">
  @foreach($posts as $post)

  <div class="row pb-2 pt-3">
    <div class="col-4 offset-4">
            <div class="d-flex">
            <span class="font-weight-bold ">
                <a href="/profile/{{ $post->user->id }}" 
                class="text-dark" >{{ $post->user->name}}
                </a></span>
            <p> {{ $post->caption }}</p>
            </div>
        </div>
    </div>
   </div>

  <div class="row">
    <div class="col-4 offset-4">
        <a href="/profile/{{ $post->user->id }}">
        <img src="/storage/{{ $post->image }}" class="w-100" alt="">
        </a>
    </div>
  </div>
  
   @endforeach

   <div class="row pt-5">
    <div class="col-12 d-flex justify-content-center" >
        {{ $posts->links() }}
    </div>
   </div>
</div>
@endsection