@extends('layouts.app')

@section('content')

<div class="container mb-5">
    <h1 class="py-5"> Update project: {{$project->title}}</h1>
    @include('partials.error')

    <form action="{{route('admin.projects.update', $project->slug)}}" method="post" class="card p-3" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="batman" aria-describedby="titleHlper" value="{{$project->title}}">
            <small id="titleHlper" class="text-muted">Add the project title here</small>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="4">{{$project->description}}"</textarea>
        </div>

        <div class="mb-3">
            <img width="100" src="{{asset('storage/' . $project->cover_image)}}" alt="">
            <label for="cover_image" class="form-label">cover image</label>
            <input type="file" name="cover_image" id="cover_image" class="form-control" placeholder="add cover image " aria-describedby="helpId">

        </div>
        <div class="mb-3">
            <label for="difficulty" class="form-label">difficulty</label>
            <input type="text" name="difficulty" id="difficulty" class="form-control @error('difficulty') is-invalid @enderror" placeholder="batman vol-2 (joker)" aria-describedby="difficultyHlper" value="{{$project->difficulty}}">
            <small id="difficultyHlper" class="text-muted">Add the project difficulty here</small>
        </div>
        <div class="mb-3">
            <label for="language" class="form-label">language</label>
            <input type="text" name="language" id="language" class="form-control @error('language') is-invalid @enderror" placeholder="12.20" aria-describedby="languageHlper" value="{{$project->language}}">
            <small id="languageHlper" class="text-muted">Add the project language here</small>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>

@endsection