<?php
$department= array(
    80=>'Somme',
    60=>'Oise',
    02=>'Aisne',
    59=>'Nord',
    62=>'Pas-de-Calais',
);

   
   ?> 
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5</title>
</head>
<body>
   <?php
    foreach($department as $clef=>$valeur){
     echo "Le département $valeur a le numéro $clef<br>";
    }
//    print_r($department);
//    var_dump($department);
   ?> 
</body>
</html>