<?php

final class UrukHai extends Monster
{
    public function __construct(string $name = "UrukHai", int $health = 80, int $healthMax = 80)
    {
        parent::__construct($name, $health, $healthMax);
    }
}