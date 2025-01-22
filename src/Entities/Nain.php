<?php

final class Nain extends Hero
{
    private string $skin_path = "./assets/img/Nain.png";

    public function __construct(int $id, string $name = "Nain", int $health = 100, int $healthMax = 100)
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