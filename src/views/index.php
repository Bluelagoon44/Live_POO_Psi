<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="/css/yolo.css" />
    </head>
    <body>
        <p>Une pokemon sauvage apparait, <?= $pokemons[$rand]["name"] ?> est dans la place</p>

        <form action="" method="post">
            <button name="capture" value="<?= $pokemons[$rand]["id"] ?>">Capturer</button>
            <button name="leaveAlone">Laisser tranquille</button>
        </form>

        <?php
            if(count($pokemonsCaptured)>0){
                foreach($pokemonsCaptured as $pokemon){ ?>
                    <p><?= $pokemon["name"] ?></p>
                    <form method="post">
                        <button name="free" value="<?= $pokemon["id"] ?>">Libérer</button>
                    </form>
                <?php }
            }
        ?>
    </body>
</html>