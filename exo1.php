<?php
/*
$nb=13;
$txt="rendezvous";
$voF= true;

echo $nb ." ". $txt ." ".  $voF;
*/

/*
$tab=array(13, 72, 34, 24, 65);
for($i=0; $i<4; $i++){
    echo $tab[$i]." ";
}
*/

/*
$tabAsso=array(
    "Prénom" => "Bob",
    "Nom" => "Rob",
    "Age" => 68
);
foreach($tabAsso as $cle => $value){
    echo $cle . " : " . $value;
}
*/

/*
$tabNb=array(8, 5, 7, 2, 1, 9, 3, 4, 6);
for($i=0; $i<count($tabNb); $i++){
    if($tabNb[$i]>5){
        echo $tabNb[$i];
    }
}
*/

/*
$tabC=array("a", "b", "c", "d");
$total=count($tabC);
echo $total;
array_push($tabC, 5, 6);
array_pop($tabC);
$total=count($tabC);
echo $total;
*/

/*
$chaine="adomin";
$invert=strrev($chaine);
echo $invert;
*/

/*
$total=0;
$tabCalcul=array(25, 13, 12, 44);
for($i=0; $i<count($tabCalcul); $i++){
    $total+=$tabCalcul[$i];
}
echo $total;
*/

/*
$verif=False;
$mot="deux";
$tabCar=array("un", "deux", "trois", "quatre", "cinq");
foreach($tabCar as $value){
    if($value==$mot){
        $verif=True;
    }
}
if($verif==True){
    echo $mot." a été trouvé dans le tableau";
}
else{
    echo $mot." n'a pas été trouvé dans le tableau";
}
*/


/*
$multi=array(
    array(40, 60, 10),
    array("a", "b", "c"),
    array(1, 2, 3)
);
foreach ($multi as $row) {
    foreach ($row as $value) {
        echo $value . " ";
    }
    echo "<br>";
}
*/

/*
date_default_timezone_set('Europe/Paris');
$dates=date("d/m/y h:i:s");
echo $dates;
*/

/*
$randomNumber=rand(0, 100);
while (True){
    $guess=readline("Entrez un nombre entre 1 et 100: ");
    if($guess==$randomNumber){
        echo "Vous avez trouvé !";
        break;
    }
    elseif($guess<$randomNumber){
        echo "c'est plus \n";
    }
    elseif($guess>$randomNumber){
        echo "c'est moins\n";
    }
    else{
        echo "ça doit être un nombre entre 0 et 100";
    }
}
*/

                        //FONCTION

/*
function somme($nombre1, $nombre2){
    $resultat=$nombre1 + $nombre2;
    return $resultat;
}
echo somme(8, 9);
*/
?>



