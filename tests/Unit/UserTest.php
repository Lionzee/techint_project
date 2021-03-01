<?php

namespace Tests\Unit;


use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    use WithFaker;

    public function testExample()
    {
        $this->assertTrue(true);
    }

    /*public function test_success_registration() {

        $data = [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'password' => 'password',
            'password_confirmation' => 'password',
        ];

        $this->post(route('api_register'), $data)
            ->assertStatus(201);
    }*/

    public function test_fail_email_already_registered(){
        $data = [
            'name' => $this->faker->name,
            'email' => User::all()->random()->email,
            'password' => 'password',
            'password_confirmation' => 'password',
        ];

        $this->post(route('api_register'), $data)
            ->assertStatus(400);
    }

    public function test_login_success(){
        $data = [
            'email' => 'jstone@email.com',
            'password' => 'password',
        ];

        $this->post(route('api_login'), $data)
            ->assertStatus(200);
    }

    public function test_login_failed(){
        $data = [
            'email' => 'jstone@email.com',
            'password' => 'passwordee',
        ];

        $this->post(route('api_login'), $data)
            ->assertStatus(400);
    }


}
