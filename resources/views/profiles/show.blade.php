@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/storage/{{$user->profile->image}}" class="rounded-circle" style="width:170px";>
        </div>
    <div class="col-9 p-5" >
            <div class="d-flex justify-content-between"><h1>{{ $user->username }}</h1>
            <a href="/p/create">Add New Post</a>
        </div>
        @can('update' , $user->profile)
            <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
        @endcan
            <div class="d-flex">
                <div class="pr-3"> <strong>{{ $user->posts->count() }}</strong> posts </div>
                <div class="pr-3"> <strong>2m</strong> followers</div>
                <div class="pr-3"> <strong>9</strong> following</div>
            </div>
            <div class="pt-4">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href='#'>{{ $user->profile->url }}</a></div>
    </div>
    </div>

    <div class="row pt-4">
        @foreach ($user->posts as $post)
        <div class="col-4 pb-4">
        <a href="/p/{{ $post->id }}">
            <img src="/storage/{{ $post->image }}" class="w-100">
        </div>
        @endforeach
    </div>
</div>
@endsection
