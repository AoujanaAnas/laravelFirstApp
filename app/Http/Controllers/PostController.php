<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\StorePost;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
       return view('post.index' , ['posts' => Post::all()]);
        
    }

   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('post.show' , ['post' => Post::find($id)]);
        
    }


    public function create(){
        
        return view('post.create');
        
    }

    public function store(StorePost $request){

        $post = new Post();
        $post->title = $request->input('title');
        $post->contenue = $request->input('contenue'); 

        $post->slug = Str::slug($request->title , '-');
        $post->active = false;
        $post->save();

        $request->session()->flash('message' , '********Post a ete creer avec succes********');
        return redirect()->route('posts.index');
        
    }
    public function edit($id){
        
      $post = Post::findOrFail($id);
      return view('post.edit' , [
          'post' => $post
      ]);
        
    }
    public function update(StorePost $request , $id){
        $post = Post::findOrFail($id);
        $post->title = $request->input('title'); 
        $post->contenue = $request->input('contenue');
        $post->slug = Str::slug($request->input('title') , '-');
        $post->save();

        $request->session()->flash('message' , '********Post a ete modifier avec succes********');
        return redirect()->route('posts.index');
              
    }

    public function destroy(Request $request , $id){
        //first methose
        //$post = Post::find($id);
        //$post->delete();
        //second methode
        Post::destroy($id);


        $request->session()->flash('message' , 'Post a ete suprimer avec succue');
        return redirect()->route('posts.index');

    }

}
