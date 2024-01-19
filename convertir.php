<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversion de devises</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        button {
            background-color:purple;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        #resultat {
            margin-top: 20px;
            color: #333;
        }
    </style>
</head>
<body>
 
<h1>Convertir en EURO, DOLLAR ou DIRHAMS</h1>

<?php
function convertdevise($montant, $tauxDeChange){        //FONCTION
    return $montant * $tauxDeChange;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $montant = $_POST['Montant'];
    $monnaieDeBase = $_POST['monnaieDeBase'];
    $monnaieDeChange = $_POST['monnaieDeChange'];

    $DevisesEURO = [
        "EUR" => 1.00,
        "USD" => 1.09,
        "AED" => 4.02
    ];

    $DevisesUSD = [
        "USD" => 1.00,
        "EUR" => 0.91,
        "AED" => 3.67
    ];

    $DevisesAED = [
        "AED" => 1.00,
        "USD" => 0.27,
        "EUR" => 0.25
    ];
    
    if (isset($monnaieDeBase) && isset($monnaieDeChange)) {
        if ($monnaieDeBase == "EUR"){
            $tauxDeChange = $montant * $DevisesEURO[$monnaieDeChange];
            echo "<p>{$montant} {$monnaieDeBase} équivalent à {$tauxDeChange} {$monnaieDeChange} (taux de change : 1 {$monnaieDeBase} = {$DevisesEURO[$monnaieDeChange]} {$monnaieDeChange}).</p>";
        }
        if ($monnaieDeBase == "USD"){
            $tauxDeChange = $montant *  $DevisesUSD[$monnaieDeChange];
            echo "<p>{$montant} {$monnaieDeBase} équivalent à {$tauxDeChange} {$monnaieDeChange} (taux de change : 1 {$monnaieDeBase} = {$DevisesUSD[$monnaieDeChange]} {$monnaieDeChange}).</p>";
        }
        if ($monnaieDeBase == "AED"){
            $tauxDeChange = $montant *  $DevisesAED[$monnaieDeChange];
            echo "<p>{$montant} {$monnaieDeBase} équivalent à {$tauxDeChange} {$monnaieDeChange} (taux de change : 1 {$monnaieDeBase} = {$DevisesAED[$monnaieDeChange]} {$monnaieDeChange}).</p>";
        }
    
        //$resultat = convertdevise($montant, $tauxDeChange);
        
    } else {
        echo "<p>Erreur : Veuillez sélectionner des monnaies valides.</p>";
    }
}
?>

<form method="post" action="">
    <label for="Montant">Montant :</label>
    <input type="text" name="Montant" id="Montant" required >

    <label for="monnaieDeBase">Monnaie de base :</label>
    <select name="monnaieDeBase" id="monnaieDeBase" required>
        <option value="EUR">Euro (€)</option>
        <option value="USD">Dollar ($)</option>
        <option value="AED">Dirhams (AED)</option>
       
    </select>

    <label for="monnaieDeChange"> Monnaie de change :</label>
    <select name="monnaieDeChange" id="monnaieDeChange" required>
        <option value="EUR">Euro (€)</option>
        <option value="USD">Dollar ($)</option>
        <option value="AED">Dirhams (AED)</option>
       
    </select><br>
    <br>

    <button type="submit">Convertir</button>
</form>

</body>
</html>