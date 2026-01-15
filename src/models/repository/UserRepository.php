<?php
    class UserRepository extends Db{
        public static function request($query, $params=null){
            $query = self::connect()->prepare($query);
            $query->execute($params);
            self::disconnect();
            return $query;
        }

        public static function getUsers(){
            return self::request("SELECT * FROM user")->fetchAll();
        }

        public static function getUserById($id){
            return self::request("SELECT * FROM user WHERE id=:id", [":id"=>$id])->fetchAll();
        }

        public static function deleteUser($id){
            return self::request("DELETE FROM user WHERE id=:id", [":id"=>$id]);
        }
    }
?>