<?php


    $article1 = [
    "prix" => 128.28,

    "nom" => " € la Pizza Mamamia ",

    "photo" => "<img src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSIh5vpy0pA4Gf8HvnrDOOM4lM0oIo4FNim6A&usqp=CAU\" alt=/>",

];

$article2 = [

    "prix" => 130.28,

    "nom" => " € la Pizza Aïe Aïe ",


    "photo" => "<img src=\"pizza1.jpg\" alt=/>",

];

$article3 = [

    "prix" => 140.25,

    "nom" => "€ la Pizza Muy bonita ",

    "photo" => "<img src=\"pizza-maison.jpg\" alt=/>",

];
    $catalogue = [$article1,$article2,$article3];
function displayItem($prix, $nom, $photo){
    echo $prix;
    echo $nom;
    echo $photo;
}
    foreach ($catalogue as $article) {
        displayItem($article["prix"], $article["nom"], $article["photo"]);
}


?>