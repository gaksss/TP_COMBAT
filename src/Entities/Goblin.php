
<?php

final class Goblin extends Monster
{

    private string $skin_path = "./assets/img/Gobelin.png";

    
    public function __construct(string $name = "Goblin", int $health = 60, int $healthMax = 60, )
    {
        parent::__construct($name, $health, $healthMax);
        
    }

    

    /**
     * Get the value of skin_path
     */ 
    public function getSkin_path()
    {
        return $this->skin_path;
    }
}
