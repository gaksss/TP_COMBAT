<?php



final class Hero
{

    private int $id;
    private string $name;
    private int $hp = 50;
    private string $skin_path = './assets/img/Nain.jpg';

    

    public function __construct(int $id, string $name, int $hp, string $skin_path)
    {
        $this->id = $id;
        $this->name = $name;
        $this->hp = $hp;
        $this->skin_path = $skin_path;
        
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

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
     * Get the value of skin_path
     */
    public function getSkin_path()
    {
        return $this->skin_path;
    }

}
