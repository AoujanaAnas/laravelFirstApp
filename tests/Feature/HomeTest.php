<?php

namespace Tests\Feature;


use Tests\TestCase;

class HomeTest extends TestCase
{
    //testing home page
    public function testHomePage()
    {
        $response = $this->get('/home');

        $response->assertSeeText('this is home page');
    }
    //testing about page
    public function testAboutPage()
    {
        $response = $this->get('/about');

        $response->assertSeeText('About Us Page');
        $response->assertSeeText('My name is AOUJANA Anas like');
    }
}
