<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        //$response = $this->get('/');
        $res=$this->get('/');
        //$this->get('/')->assertSee('Laravel');
        $res->assertStatus(200);
        //$response->assertStatus(200);
    }
}
