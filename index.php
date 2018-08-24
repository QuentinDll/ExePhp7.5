<?php
// declaration du tableaux
$state = array(
  '02' => 'Aisne',
  '59' => 'Nord',
  '60' => 'Oise',
  '62' => 'Pas-de-Calais',
  '80' => 'Somme'
);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 7</title>
    </head>
    <body>
        <?php 
            array_push($state,  '51');
            var_dump($state);
        ?>
    </body>
</html>
