<?php

final class Nain extends Hero
{

    
    private int $bonusHp = 20;



    public function __construct(int $bonusHp, string $skin_path)
    {
        $this->bonusHp = $bonusHp;
        
    }


   

    /**
     * Get the value of bonusHp
     */ 
    public function getBonusHp()
    {
        return $this->bonusHp;
    }
}
