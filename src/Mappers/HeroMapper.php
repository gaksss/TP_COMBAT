<?php


class HeroMapper 
{
    public static function mapToObject(array $datas)
    {
        return new Hero(
            $datas['id'],
            $datas['name'],
            $datas['health'],
            $datas['healthMax'],
        );
    }

    public static function mapToArray(Hero $hero)
    {
        return [
            'name' => $hero->getName(),
            'health' => $hero->getHealth(),
            'healthMax' => $hero->getHealthMax(),
            'id' => $hero->getId(),
        ];
    }
}