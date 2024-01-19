<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devinez le nombre</title>
</head>
<body>
 
<h1>Jeu de devinette</h1>

<?php
    session_start();
     if ($_SERVER["REQUEST_METHOD"] == "GET"){
        $nombreAleatoire = rand(1, 100);
        $nbrEssai = 7;
        $_SESSION["tabValue"]=array();

     }
     else if($_POST["nbrEssai"] > 1){

        $tabValue = $_SESSION["tabValue"];
        array_push( $tabValue,$_POST["supposition"]);
        print_r($tabValue);


        $_SESSION["tabValue"]=$tabValue;
        $nbrEssai = $_POST["nbrEssai"] - 1;

        echo "Il vous reste " . $nbrEssai . " d'essai";
        
        $nombreAleatoire = $_POST["nombreAleatoire"];
        $supposition = $_POST["supposition"];
        if ($supposition == $nombreAleatoire) {
            $message = "<p>Félicitations, vous avez deviné le bon nombre ($nombreAleatoire) !</p>";
        
        } else {
            $message = "<p>Votre supposition est " . (($supposition < $nombreAleatoire) ? "trop basse" : "trop haute") . ". Essayez à nouveau.</p>";
        }
        echo $message;

        }
    else{
        echo "Vous avez perdu la bonne réponse était :". $_POST["nombreAleatoire"];
    }   
     ?>
    

    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="supposition">Entrez votre supposition (entre 1 et 100) :</label>
        <input type="number" name="supposition" id="supposition" required min="1" max="100">
        <input type="hidden" value= "<?php echo $nombreAleatoire ?>" name="nombreAleatoire">
        <input type="hidden" value= "<?php echo $nbrEssai ?>" name="nbrEssai">
        <button type="submit">Soumettre</button>
    </form>
</body>
</html>