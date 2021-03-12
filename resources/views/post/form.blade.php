
<div class="form-group">
    <label for="title"> Votre Title </label>
    <input class="form-control" name= "title" id="title" type="text" value="{{ old('title' , $post->title ?? null) }}">
 </div>      
<div class="form-group">
    <label for="contenue"> Votre Contenue </label>
    <input class="form-control" name= "contenue" id="contenue" type="text" value="{{ old('contenue' , $post->contenue ?? null) }}">
 </div>

 @if($errors->any())
<ul>
  @foreach ($errors->all() as $error)
  <li> {{ $error }} </li>
  @endforeach 
</ul>
@endif