<?php
require_once(__DIR__ . "/../src/models/Db.php");
require_once(__DIR__ . "/../src/models/repository/UserRepository.php");
require_once(__DIR__ . "/../src/models/entity/User.php");
require_once(__DIR__ . "/../src/controllers/Controller.php");
require_once(__DIR__ . "/../src/controllers/MainController.php");
require_once(__DIR__ . "/../src/core/Router.php");

try{
   $app = new Router();
   $app->start();
}
catch(PDOException $e){
    die($e->getMessage());
}

?>