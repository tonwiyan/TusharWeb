@extends('layouts.app')

@section('content')




<form method="POST" action="{{ route('blogs.store') }}">

    @csrf
    <h1 class="subtitle is-3 center mt-1">Create Bolg</h1>
    <div class="field ">
        <div class="control">
            <textarea class="textarea is-large" name="body" placeholder="What's on your mind"></textarea>
        </div>
    </div>
    {{-- <input class="input" name="name" type="text" value="{{ $teacher->name }}" placeholder="Text input"> --}}

    <div class="control">
        <button class="button is-primary">Submit</button>
    </div>

</form>

@endsection

{{-- <a href="/teachers/{{$teacher->id}}/edit" class="button is-warning">Edit</a> --}}