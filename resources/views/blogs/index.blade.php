@extends('layouts.app')

@section('content')
@if(!Auth::guest())
<div class="mt-1">
    <a class="button is-light" href="{{url('blogs/create')}}">
        Create
    </a>
</div>
@endif

<h1 class="subtitle is-3 center">Blogs</h1>

@if(count($blogs)>0)
@foreach ($blogs as $blog)
<div class="textarea">
    <h3 class="title-is 4">{{$blog->body}}</h3>

    <small class="mt-1">written on{{$blog-> created_at}}</small>

</div>
<a href="/blogs/{{$blog->id}}/edit" class="">Edit</a>
<a href="{{route('blogs.destroy', $blog)}}" class="">Delete</a>




<form role="form" method="post" action="{{route('blogs.destroy', $blog)}}">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <input class="button is-danger" type="submit" value="Delete" />
    {{-- <a class="ml-1"  value="Delete">Delete</a> --}}
</form>




@endforeach
@else
<p>No Post Found</p>
@endif

@endsection

{{-- <a href="/teachers/{{$teacher->id}}/edit" class="button is-warning">Edit</a> --}}