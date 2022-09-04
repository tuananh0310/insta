@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-3">
            <img src="{{ $user -> profile -> profileImage() }}" class="rounded-circle w-75">
        </div>
        <div class="col-9 pt-3">
            <div class="d-flex justify-content-between align-items-baseline pb-3">
               
                <div class="d-flex align-items-center">
                <div class="h4" style="padding-right: 20px;">{{ $user -> name }}</div>


                <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                </div>

                @can('update', $user->profile)
                <a href="/p/create">Add New Post</a>
                @endcan
            
            </div>

            @can('update', $user->profile)
            <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
            @endcan

            <div class="d-flex">
                <div style="padding-right:10px;" ><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div style="padding-right:10px;" ><strong>{{ $user->profile->followers->count() }}</strong> followers</div>
                <div style="padding-right:10px;" ><strong>{{ $user->following->count() }}</strong> following</div>
            </div>
            <div class="pt-2 font-weight-bold">{{ $user->profile->title }}</div>
            <div class="mb-0"><p>{{ $user->profile->description }}</p></div>
            <div class="font-weight-bold"><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>
    <div class="row pt-3">

        @foreach($user->posts as $post)
        <div class="col-4">
            <a href="/p/{{ $post->id }}">
            <img src="/storage/{{ $post->image }}" class="w-100" alt="">
            </a>
        </div>
        @endforeach

       
    </div>
</div>
@endsection
