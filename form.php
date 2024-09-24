<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <label for="nom">
            Nom
            <input type="text" name="nom" id="nom">
        </label>
        <br>
        <br>
        <label for="Prénom">
            Prénom
            <input type="text" name="prenom" id="Prénom">
        </label>
        <br>
        <br>
        <label for="email">
            Email
            <input type="email" name="email" id="email">
        </label>
        <br>
        <br>
        <input type="submit" name="submit" id="submit">
    </form>
    <?php 
        function regler(String $valeur){
            $valeur = trim($valeur);
            $valeur = htmlspecialchars($valeur);
            return $valeur;
        }

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            if((isset($_POST['nom']) && !empty($_POST['nom'])) 
            && (isset($_POST['prenom']) && !empty($_POST['prenom']))
            && (isset($_POST['email']) && !empty($_POST['email']))) {
                $nom = regler($_POST['nom']);
                $prenom = regler($_POST['prenom']);
                $email = regler($_POST['email']);
                echo "<br><br>Welcome $nom $prenom !<br><br>";
                echo "We sent you all the informations on your email, $email";
            }
        }
    ?>
</body>
</html>
