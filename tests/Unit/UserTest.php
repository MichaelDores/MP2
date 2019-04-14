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
    public function testInsert()
    {

        $newusers = new Users();
        $newusers->setid('52');
        $newusers->setname(Tom);
        $newusers->setemail('tom@email.com');
    }
}
