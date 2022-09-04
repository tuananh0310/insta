@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
    <div class="col-8">
        <img src="/storage/{{ $post->image }}" class="w-100" alt="">
    </div>
    <div class="col-4">
        <div>
            <div class="d-flex align-items-center">
                <div class="pr-3">
                    <img src=" {{ $post->user->profile->profileImage() }}" class="rounded-circle w-100" style="max-width:40px;" alt="">
                </div>
                <div>
                    <div class="font-weight-bold">
                        <a href="/profile/{{ $post->user->id }}" 
                        class="text-dark" >{{ $post->user->name}}
                        </a> 
                        <a href="#" class="pl-1">Follow</a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="d-flex">
            <span class="font-weight-bold pr-3">
                <a href="/profile/{{ $post->user->id }}" 
                class="text-dark" >{{ $post->user->name}}
                </a></span>
            <p> {{ $post->caption }}</p>
            </div>
        </div>
    </div>
   </div>
</div>
@endsection