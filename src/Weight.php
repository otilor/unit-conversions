<?php

namespace Gabrielfemi\UnitConversions;

class Weight
{
    private float $kilograms;

    public function __construct(float $kilograms)
    {
        $this->kilograms = $kilograms;
    }

    public static function fromKilograms(float $kilograms): self
    {
        return new static($kilograms);
    }

    public function toLbs(): float
    {
        return $this->kilograms * 2.204623;
    }

    public function toTonnes(): float
    {
        return $this->kilograms * 0.001;
    }
}
