@extends('layouts.app')

@section('content')




{{-- <form method="POST" action="{{ route('blogs.update') }}"> --}}
<form role="form" method="post" action="{{route('blogs.update', $blog)}}">

    @csrf
    <h1 class="subtitle is-3 center mt-1">Create Bolg</h1>

    {{-- <input type="text" name="body" value="{{ $blog->body }}"> --}}
    <div class="field ">
        <div class="control">
            <textarea class="textarea is-large" name="body" value="{{ $blog->body }}"
                placeholder="What's on your mind"></textarea>
        </div>
    </div>

    <div class="control">
        <button class="button is-primary">Submit</button>
    </div>
    <input type="hidden" name="_method" value="PUT">

</form>

@endsection

{{-- <a href="/teachers/{{$teacher->id}}/edit" class="button is-warning">Edit</a> --}}