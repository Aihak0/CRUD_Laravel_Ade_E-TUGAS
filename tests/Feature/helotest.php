<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class helotest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_helo()
    {
        $this->get('/helo')->assertSeeText("joko");

    }
    public function test_heloview()
    {
        $this->get('dunia.helo')->assertSeeText("joko");

    }
}
