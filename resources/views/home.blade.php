@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fevn1-1.fna.fbcdn.net/vp/7b566cedfde1a248e41c0e07d7331037/5E4F344C/t51.2885-19/s150x150/75223589_663660880824955_8008017088041975808_n.jpg?_nc_ht=instagram.fevn1-1.fna.fbcdn.net" class="rounded-circle" style="width:170px";>
        </div>
    <div class="col-9 p-5" >
            <div class="d-flex justify-content-between"><h1>{{ $user->username }}</h1>
            <a href="#">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-3"> <strong>12,896</strong> posts </div>
                <div class="pr-3"> <strong>2m</strong> followers</div>
                <div class="pr-3"> <strong>9</strong> following</div>
            </div>
            <div class="pt-4">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href='#'>{{ $user->profile->url }}</a></div>
    </div>
    </div>

    <div class="row pt-4">
        <div class="col-4">
            <img src="https://instagram.fevn1-4.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/72886894_602671190271966_1611853787804882474_n.jpg?_nc_ht=instagram.fevn1-4.fna.fbcdn.net&_nc_cat=106&oh=784c8e1e2d68ac508df5a5dcad866801&oe=5E88E382" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fevn1-4.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/72886894_602671190271966_1611853787804882474_n.jpg?_nc_ht=instagram.fevn1-4.fna.fbcdn.net&_nc_cat=106&oh=784c8e1e2d68ac508df5a5dcad866801&oe=5E88E382" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fevn1-4.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/72886894_602671190271966_1611853787804882474_n.jpg?_nc_ht=instagram.fevn1-4.fna.fbcdn.net&_nc_cat=106&oh=784c8e1e2d68ac508df5a5dcad866801&oe=5E88E382" class="w-100">
        </div>
    </div>
</div>
@endsection
