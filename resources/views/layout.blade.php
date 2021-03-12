<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('/css/theme.css') }}">
    <title>Document</title>
</head>
   
<body>
    @if(session()->has('message'))
           <div class="alert alert-success" role="alert" style = color:green>
               {{ session()->get('message') }}
           </div>
         @endif

         <nav class="navbar navbar-expand navbar-light bg-light">
            <a class="navbar-brand" href="#">
               
                <img src="/img/ubt.png" style="width:90px;">
              </a>
             <ul class="nav navbar-nav">
                 <li class="nav-item active"><a class="nav-link" href = "{{ route('home') }}">Home</a></li>
                 <li class="nav-item"><a class="nav-link" href = "{{ route('about') }}">About</a></li>
                 <li class="nav-item"><a class="nav-link" href = "{{ route('posts.index') }}">Posts</a></li>
                 <li class="nav-item"><a class="nav-link" href = "{{ route('posts.create') }}">Ajouter Post</a> </li>
             </ul>
         </nav>
    
         <div class="container">

             @yield('content')
         </div>
       
         <script source={{ mix('/js/app.js') }}></script>
</body>
</html>