<?php

namespace Tests\Feature;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Foundation\Testing\RefreshDatabase;

use Tests\TestCase;

class PostTest extends TestCase
{
    use RefreshDatabase;
    //testing savePost on databae
    public function testSavePost()
    {
        $post = new Post();
        $post->title = 'new title';
        $post->slug = Str::slug($post->title , '-');
        $post->contenue = 'new content';
        $post->active = false;

        $post->save();
        $this->assertDatabaseHas('posts' , [
            'title' => 'new title'
        ]);

    }

    public function testStoreValidation(){
        $data = [
          'title' => 'testing database',
          'slug' => Str::slug('testing database' , '-'),
          'contenue' => 'testing contenue database',
          'active' => false  
        ];

        $this->post('/posts' , $data)     
        ->assertStatus(302)       //302 est le status de redirection, il est comme 404 d'erreur
        //on peut tester avec le status 200 de creation mais dans notre cas en fait la creation et la redirection
        //donc le dernier code http utiliser est de la redirection 302
        ->assertSessionHas('message');

        $this->assertEquals(session('message') , '********Post a ete creer avec succes********');

    }
}
