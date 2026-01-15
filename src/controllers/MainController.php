<?php
    class MainController extends Controller{
        public function start(){
            try{
                // Ici on gère les requêtes SQL nécessaires pour l'affichage de la page
                // Ainsi que les formulaires présents sur la page

                // Exemple :
                $users = User::getUsers();
                var_dump($users);
                // if(isset($_POST["yolo"])){
                //     User::deleteUser($_POST["yolo"]);
                // }
            }
            catch(Exception $e){
                echo $e->getMessage();
            }

            // On importe la vue de la page correspondante, qui aura accès à nos variables créées plus haut
            require(__DIR__ . "/../views/index.php");
        } 
    }
?>