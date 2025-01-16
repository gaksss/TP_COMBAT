<?php 

class HeroMapper {
    public static function mapToObject(array $data){
        return new Hero(
            $data['id'],
            $data['name'],
            $data['hp'],
            $data['skin_path']
        );
    }
}