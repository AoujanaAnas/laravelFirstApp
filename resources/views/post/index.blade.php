@extends('layout')
@section('content')
    
<h1> List des Posts </h1>
     <ul class = "list-group">
         
         @forelse ($posts as $post)
         <li class = "list-group-item"> <h2><a href="{{ route('posts.show' , ['post' => $post->id]) }}">{{ $post->title }}</a></h2>
            <p>{{ $post->contenue }} </p>
            <em> {{$post->created_at->diffForHumans()}} </em>
            <a class = "btn btn-success" href="{{ route('posts.edit',['post' => $post->id]) }}">edit</a>
            
            <form style="display: inline" action="{{ route('posts.destroy' , ['post' => $post->id]) }}" method="POST" >
                @csrf
                @method('DELETE')
              
                    <button class = "btn btn-danger" type="submit"> delete </button>
               </form>


         </li>
         @empty
             <span class="badge badge-danger">No post found!!!!!!!!!!!!!!!!! </span>
         @endforelse   
     </ul>
       
     <ul class="pagination justify-content-center">
        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
      </ul>

@endsection