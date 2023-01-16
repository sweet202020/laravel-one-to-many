@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="d-flex gap-4">
        <div class="details">
            <h1>{{$project->title}}</h1>
            <p>{{$project->description}}</p>
            @if($project->cover_image)
            <img src="{{asset('storage/' . $project->cover_image)}}" alt="">
            @else
            <div class="placeholder-glow p-5 bg-danger">
                placeholder
            </div>
            @endif
            <div class="meta">
                <div class="difficulty">
                    difficulty: {{$project->difficulty}}
                </div>
                <div>
                    language:{{$project->language}}
                </div>
            </div>

        </div>
    </div>
</div>
@endsection