<?php

namespace Tests\Feature;

use Tests\TestCase;

class ApplicationScaffoldedCorrectlyTest extends TestCase
{
    /**
     * @test
     * @return void
     */
    public function welcome_page_loads_correctly(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee('Laravel');
    }

    /**
     * @test
     * @return void
     */
    public function login_page_loads_correctly(): void
    {
        $response = $this->get('/admin/login');
        $response->assertStatus(200);
        $response->assertSee('Login');
        $response->assertSee('Email');
        $response->assertSee('Password');
    }
}
