@extends('layout')
@section('content')
    
     <ul>
         
         <li> 
             <h2>{{ $post->title }} </h2>
             <p>{{ $post->contenue }} </p>
             <p> status : 
                 @if (($post->active) == 1)
                         Enabled
                         @else
                        Disabled      
                         @endif
                 </p>
             <em> {{$post->created_at->diffForHumans()}} </em>
        </li>
         
        
     </ul>

@endsection