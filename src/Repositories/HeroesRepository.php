<?php 

class HeroesRepository extends AbstractRepository {


    public function findAll(): array {
        $query = "SELECT * FROM hero";
        $stmt = $this->pdo->query($query);
        $heroDatas = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($heroDatas as $heroData){
            $hero[]= HeroMapper::mapToObject($heroData);
        }
        return $hero;
    }

    public function find(int $id): Hero{
        $query = "SELECT * FROM hero WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute(['id'=> $id]);
        $heroDatas = $stmt->fetch(PDO::FETCH_ASSOC);

        return HeroMapper::mapToObject($heroDatas);
    }

    
}