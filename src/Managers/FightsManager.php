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



    public function generateDisplay($hero): string
    {
        ob_start();
?>
        <section class="heroes">
            <article class="heroCard">
                <form action="./fight.php">
                    <div class="heroSelector">
                        <h2><?= $hero->getName() ?></h2>
                        <img src="<?= $hero->getSkin_path() ?>" alt="Modele du nain" class="hero">
                        <button type="submit" class="selectHero">Choisir</button>
                    </div>
                </form>
            </article>
        </section>
<?php
        return ob_get_clean();
    }
}
