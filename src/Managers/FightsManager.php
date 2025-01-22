<?php

final class FightsManager
{
    private $heroesRepository;


    public function __construct()
    {
        $this->heroesRepository = new HeroRepository();
    }



    public function getHeroInfo()
    {

        $hero = $this->heroesRepository->find(1);
        $hero->getName();

        return $hero;
    }



    
}
