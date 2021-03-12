@extends('layout')
@section('content')

<h1>Modifier Post</h1>
   <form action="{{ route('posts.update' , ['post' => $post->id]) }}" method="POST" >
    @csrf
    @method('PUT')
       
      @include('post.form')

        <button class="btn btn-block btn-warning" type="submit"> modifier post </button>
   </form>

@endsection