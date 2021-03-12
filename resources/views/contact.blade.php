@extends('layout')
@section('content')
<div class="contact-section">

  <h1>Contact Us</h1>
  <div class="border"></div>
  <form class="contact-form" action="adcontact.php" method="POST">
    <input type="text" class="contact-form-text" placeholder="Your name" name="name">
    <input type="email" class="contact-form-text" placeholder="Your email" name="email">
    <input type="text" class="contact-form-text" placeholder="Your phone" name="phone">
    <textarea class="contact-form-text" placeholder="Your message" name="message"></textarea>
    <input type="submit" class="contact-form-btn" value="Send" name="action">
  </form>
</div>
  
@endsection