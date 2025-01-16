<?php

final class Nain extends Hero
{

    private string $skin_path = '../public/assets/img/Nain.jpg';
    private int $bonusHp = 20;



    public function __construct(int $bonusHp, string $skin_path)
    {
        $this->bonusHp = $bonusHp;
        $this->skin_path = $skin_path;
    }


    /**
     * Get the value of skin_path
     */
    public function getSkin_path()
    {
        return $this->skin_path;
    }

    /**
     * Get the value of bonusHp
     */ 
    public function getBonusHp()
    {
        return $this->bonusHp;
    }
}
