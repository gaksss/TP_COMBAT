
<?php

final class Goblin extends Monster
{
    public function __construct(string $name = "Goblin", int $health = 60, int $healthMax = 60)
    {
        parent::__construct($name, $health, $healthMax);
    }
}
