<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ViewHomePageTest extends TestCase
{

    /** @test */
    public function homepageload()
     {
        //Arrange


         //Act

         $response=$this->get('/');
         //AssertStep
         $response->assertStatus(200);
     }

}
