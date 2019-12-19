@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fevn1-1.fna.fbcdn.net/vp/7b566cedfde1a248e41c0e07d7331037/5E4F344C/t51.2885-19/s150x150/75223589_663660880824955_8008017088041975808_n.jpg?_nc_ht=instagram.fevn1-1.fna.fbcdn.net" class="rounded-circle" style="width:170px";>
        </div>
    <div class="col-9 p-5" >
            <div class="d-flex justify-content-between"><h1>{{ $user->username }}</h1>
            <a href="/p/create">Add New Post</a>
        </div>
            <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
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
