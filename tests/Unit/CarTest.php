<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Cars;

class CarTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testCanCreatecar()
    {
        $carData = array(
            'make' => 'Ford',

        );
        $car = new Model_User($carData);
        $car->save();
    }
    public function testDeleteMethod()
    {
        $response = $this->call('DELETE', '/App/cars', ['_token' => csrf_token()]);
        $this->assertEquals(404, $response->getStatusCode());
        $this->notSeeInDatabase('Make', ['deleted_at' => null, 'id' => 1]);
    }
    public function testcarscount()
    {
        $this->assertEquals('50');
        $carcount( App\users::class, 50 )->create();
    }
    public function testmodelstring()
    {
        $this->assertThat($model, $this->logicalAnd(
            $this->isType('string')        ));
    }
    public function testmakedatavariables()
    {
        $this->assertThat($make, $this->logicalAnd(
            $this->dataName('Ford','Honda','Toyota') ));
    }
}
