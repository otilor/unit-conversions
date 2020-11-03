<?php

namespace Gabrielfemi\UnitConversions\Tests;

use Gabrielfemi\UnitConversions\Weight;
use PHPUnit\Framework\TestCase;

class WeightTest extends TestCase
{
    /** @test */
    public function it_can_convert_kilograms_to_lbs()
    {
        $lbs = Weight::fromKilograms(100)->toLbs();

        $this->assertEquals(220.4623, $lbs);
    }

    /** @test*/
    public function it_can_convert_kilograms_to_tonnes()
    {
        $tonnes = Weight::fromKilograms(100)->toTonnes();

        $this->assertEquals(0.1, $tonnes);
    }
}
