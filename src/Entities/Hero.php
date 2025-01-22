<?php

class Hero extends Character
{
    private int $id;
    private string $skin_path;

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

    /**
     * Get the value of skin_path
     */
    public function getSkin_path(): string
    {
        return $this->skin_path;
    }
}
