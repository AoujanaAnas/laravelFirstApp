@extends('layout')
@section('content')

<h1>Creer Post</h1>
   <form action="{{ route('posts.store') }}" method="POST" >
    @csrf
      
      @include('post.form')
        <button class="btn btn-block btn-success" type="submit"> creer post </button>
   </form>

@endsection