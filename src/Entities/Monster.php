<?php

final class Monster
{
    private int $hp;
    private string $type;
    private int $ad;
    private string $skin_path;


    /**
     * Get the value of hp
     */
    public function getHp()
    {
        return $this->hp;
    }

    /**
     * Set the value of hp
     *
     * @return  self
     */
    public function setHp($hp)
    {

        $this->hp = $hp;

        return $this;
    }

    /**
     * Get the value of type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return self
     */
    public function setRandomType()
    {
        $types = ["Gobelin", "Orc", "UrukHai"];
        shuffle($types);

        $this->type = $types[0];

        return $this; 

    }

    /**
     * Get the value of ad
     */
    public function getAd()
    {
        return $this->ad;
    }

    /**
     * Set the value of ad
     *
     * @return  self
     */
    public function setAd($ad)
    {
        $this->ad = $ad;

        return $this;
    }

    public function generateHp()
    {
        if ($this->type == 'Gobelin') {
            $this->hp = rand(30, 40);
        } else if ($this->type == "Orc") {
            $this->hp = rand(40, 50);
        } else if ($this->type == "UrukHai") {
            $this->hp = rand(50, 60);
        }

        return $this;
    }

    public function generateAd()
    {
        $this->ad = rand(5, 20);
        return $this;
    }



    /**
     * Get the value of skin_path
     */
    public function getSkin_path()
    {
        return $this->skin_path;
    }



    /**
     * Set the value of skin_path
     *
     * @return  self
     */
    public function setSkin_path($skin_path)
    {
        $this->skin_path = $skin_path;
        return $this;
    }

    public function generateSkin_path()
    {
        if ($this->type == 'Gobelin') {
            $this->skin_path = "./assets/img/Gobelin.png";
        } else if ($this->type == "Orc") {
            $this->skin_path = "./assets/img/Orc.png";
        } else if ($this->type == "UrukHai") {
            $this->skin_path =  "./assets/img/UrukHai.png";
        }
        return $this;
    }
}
