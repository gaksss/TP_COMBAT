<?php

final class HeroRepository extends AbstractRepository
{
    public function __construct()
    {
        parent::__construct();
    }


    public function find(int $id): ?Hero
    {
        $sql = "SELECT * FROM hero WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['id' => $id]);
        $heroData = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$heroData) {
            return null;
        }

        return HeroMapper::mapToObject($heroData);
    }

    public function findAll(): array
    {
        $sql = "SELECT * FROM hero";
        $stmt = $this->pdo->query($sql);
        $heroDatas = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $heroes = [];

        foreach ($heroDatas as $heroData) {
            $heroes[] = HeroMapper::mapToObject($heroData);
        }

        return $heroes;
    }

    public function create(Hero $hero): void
    {
        $sql = "INSERT INTO hero (name, health, healthMax) VALUES (:name, :health, :healthMax)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(
            HeroMapper::mapToArray($hero)
        );
    }
}
