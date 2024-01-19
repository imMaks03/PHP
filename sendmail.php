<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de contact</title>
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
    </style>
</head>
<body>
 
<?php
if ($_POST) {
    // Vérifier si les champs sont remplis
    if (empty($_POST["nom"]) || empty($_POST["email"]) || empty($_POST["message"])) {
        echo "<p>Tous les champs doivent être remplis.</p>";
    } else {
        // Récupérer les données du formulaire
        $nom = htmlspecialchars($_POST["nom"]);
        $email = htmlspecialchars($_POST["email"]);
        $message = htmlspecialchars($_POST["message"]);
 
        // Votre logique de traitement ici (par exemple, envoyer un e-mail, enregistrer dans une base de données, etc.)
        // ...
 
        // Afficher le message de confirmation
        echo "<h1>Merci, $nom, pour votre message.</h1>";
        echo "<p>Nous vous répondrons bientôt à l'adresse $email.</p>";
    }
 }else {
    // Afficher le formulaire si le formulaire n'a pas été soumis
?>
    <h1>Contactez-nous</h1>
 
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>
 
        <label for="email">Adresse e-mail :</label>
        <input type="email" id="email" name="email" required>
 
        <label for="message">Message :</label>
        <textarea id="message" name="message" rows="4" required></textarea><br><br>
 
        <button type="submit">Envoyer</button>
    </form>
<?php
}
?>
 
</body>
</html>