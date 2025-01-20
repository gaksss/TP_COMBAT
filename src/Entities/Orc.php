<?php

final class Orc extends Monster
{
    public function __construct(string $name = "Orc", int $health = 80, int $healthMax = 80)
    {
        parent::__construct($name, $health, $healthMax);
    }
}