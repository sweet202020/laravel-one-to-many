@extends('layouts.app')
@section('content')

<h2 class="text-center text-uppercase mt-3">add project</h2>
<form action="{{route('admin.projects.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <div class="mb-3">
            <label for="title" class="form-label">title</label>
            <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="progetto 1">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <textarea placeholder="project's description here" class="form-control" name="description" id="description" cols="30" rows="10"></textarea>

        </div>
        <div class="mb-3">
            <label for="cover_image" class="form-label">cover image</label>
            <input type="file" name="cover_image" id="cover_image" class="form-control" placeholder="add cover image " aria-describedby="helpId">

        </div>

        <div class="mb-3">
            <label for="difficulty" class="form-label">difficulty</label>
            <input type="text" class="form-control" name="difficulty" id="difficulty" aria-describedby="helpId" placeholder="project's difficulty ">
        </div>
        <div class="mb-3">
            <label for="language" class="form-label">language</label>
            <input type="text" class="form-control" name="language" id="language" aria-describedby="helpId" placeholder="project's language">
        </div>

        <button type="submit" class="btn btn-primary text-uppercase">add new project</button>
    </div>
</form>
@endsection