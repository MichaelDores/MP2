<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Users;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testCanCreateUser()
    {
        $userData = array(
            'name'  =>  'Tom',

        );
        $user = new Model_User($userData);
        $user->save();

    }
    public function testupdateuser()
    {
        $carousel = factory(App\Users::class)->create();

        $data = [
            'name' => $this->faker->word,
        ];

        $user = new name($user);
        $update = $user->updatename($user);

        $this->assertTrue($update);
        $this->assertEquals($user['name'], $carousel->Steven Smith);
    }
}
