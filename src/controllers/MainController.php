<?php
    class MainController extends Controller{
        public function start(){
            try{
                $pokemons = Pokemon::getPokemons();
                $rand = rand(0, count($pokemons)-1);
                if(isset($_POST["capture"]))
                    Pokemon::capture($_POST["capture"]);
                $pokemonsCaptured = Pokemon::getCapturedPokemons();
            }
            catch(Exception $e){
                echo $e->getMessage();
            }

            // On importe la vue de la page correspondante, qui aura accès à nos variables créées plus haut
            require(__DIR__ . "/../views/index.php");
        } 
    }
?>