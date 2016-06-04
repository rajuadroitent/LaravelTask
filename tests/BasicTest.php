<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BasicTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->visit('/')
            ->see('WELCOME');
    }

    public function testNewUserRegistration()
    {
        $this->visit('/register')
            ->type('Harish', 'name')
            ->type('harish08@gmail.com', 'email')
            ->type('123456aA', 'password')
            ->type('123456aA', 'password_confirmation')
            ->press('Register')
            ->seePageIs('/');
    }

    public function testLogin()
    {
        $this->visit('/login')

            ->type('harish08@gmail.com', 'email')
            ->type('123456aA', 'password')
            ->check('remember')
            ->press('Login')
            ->seePageIs('/');
    }
}
