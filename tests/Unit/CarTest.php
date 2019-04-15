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
    public function testupdatecar()
    {
        $car = factory(App\cars::class)->create();

        $data = [
            'year' => $this->faker->interger,
        ];

        $car = new year($car);
        $update = $car->Updateyear($car);

        $this->assertTrue($update);
        $this->assertEquals($car['year'], $year->2000);
    }
}
