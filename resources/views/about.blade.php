@extends('layout')
@section('content')
<div class="about-section">
    <h1>About Us Page</h1>
    <p>Some text about who we are and what we do.</p>
    <p>Resize the browser window to see that this page is responsive by the way.</p>
  </div>
  
  <h2 style="text-align:center">Our Team</h2>
  <div class="row">
    <div class="column">
      <div class="card">
        <img src="/img/anas3.jpeg"  alt="anas" style="width:100% " >
        <div class="container">
          <h2>AOUJANA Anas</h2>
          <p class="title">Etudiant</p>
          <p>My name is AOUJANA Anas like you saw above, </p>
        <p> I am curently studying laravel framwork to build a web application and improve my skills in developement industry .</p>
          <p>anasaoujana989@gmail.com</p>
          
          <p><button class="button" ><a class="nav-link" href = "{{ route('contact') }}">Contact</a></button></p>
        </div>
      </div>
    </div>
  
  
@endsection