@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')
        <div class="row"> 
        <div class="col-8 offset-2">
            <div class="row">
            <h1>
           Edit Profile
            </h1>
            </div>
        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">Post title</label>

                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $user->profile->title }}"  autocomplete="caption" autofocus>

                            
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">Post description</label>

                                <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') ?? $user->profile->description }}"  autocomplete="caption" autofocus>

                            
                        </div>
                        <div class="form-group row">
                            <label for="url" class="col-md-4 col-form-label text-md-right">Post url</label>

                                <input id="url" type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url') ?? $user->profile->url }}"  autocomplete="caption" autofocus>

                            
                        </div>
                <div class="row">
                <label for="image" class="col-md-4 col-form-label text-md-right">Profile Image</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                    
                </div>
                <div class="row pt-4">
                    <button class="btn btn-primary">Save Profile</button>
                </div>
        </div>
    </div>
    </form>
</div>
@endsection