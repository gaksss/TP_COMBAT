<?php 

final class FightsManager
{
    private $heroesRepository;


    public function __construct()
    {
        $this->heroesRepository = new HeroesRepository();
    }



public function getHeroInfo(){

    $hero = $this->heroesRepository->find(1);
    $hero->getName();
    $hero->getSkin_path();

    return $hero;

}



    public function generateDisplay ($hero):string
    {
        ob_start()
        ?>
        <section class="heroes">
        <article class="heroCard">
            <div class="heroSelector">
                <h2><?= $hero->getName() ?></h2>

                <img src="<?= $hero->getSkin_Path() ?>" alt="Modele du nain" class="hero">
                <button type="submit" class="selectHero">Choisir</button>
            </div>
        </article>
    </section>

    <?php  
    return ob_get_clean();
    }







    }
