<?php

final class Hero extends Character
{
    private int $id;


    public function __construct(int $id, string $name, int $health = 100, int $healthMax = 100)
    {
        parent::__construct($name, $health, $healthMax);
        $this->id = $id;
    }

    /**
     * Get the value of id
     */ 
    public function getId(): int
    {
        return $this->id;
    }
}