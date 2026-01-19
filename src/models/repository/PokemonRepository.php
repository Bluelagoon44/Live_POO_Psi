<?php
    class PokemonRepository extends Db{
        public static function request($query, $params=null){
            $query = self::connect()->prepare($query);
            $query->execute($params);
            self::disconnect();
            return $query;
        }

        public static function getPokemons(){
            return self::request("SELECT * FROM pokemon")->fetchAll();
        }

        public static function getCapturedPokemons(){
            return self::request("SELECT * FROM pokemon WHERE isCaptured=1")->fetchAll();
        }

        public static function getPokemonById($id){
            return self::request("SELECT * FROM pokemon WHERE id=:id", [":id"=>$id])->fetch();
        }

        public static function capture($id){
            return self::request("UPDATE pokemon SET isCaptured=1 WHERE id=:id", [":id"=>$id]);
        }
    }
?>