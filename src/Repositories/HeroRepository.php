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

    public function updateHp(int $id, int $health): void
    {
        $sql = "UPDATE hero SET health = :health WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            'health' => $health,
            'id' => $id
        ]);
    }

    public function killHero(int $id)
    {
        $sql = "DELETE FROM `hero` WHERE `hero`.`id` = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            'id' => $id
        ]);
    }
    public function affectSkin(int $id, string $skin_path): void
    {
        $sql = "UPDATE hero SET skin_path = :skin_path WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            'skin_path' => $skin_path,
            'id' => $id
        ]);
    }
}
