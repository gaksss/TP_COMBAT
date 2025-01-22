<?php

final class Elfe extends Hero
{
    private string $skin_path = "./assets/img/Elfe.png";

    public function __construct(int $id, string $name = "Elfe", int $health = 100, int $healthMax = 100)
    {
        parent::__construct($id, $name, $health, $healthMax);
    }

    /**
     * Get the value of skin_path
     */ 
    public function getSkin_path(): string
    {
        return $this->skin_path;
    }
}