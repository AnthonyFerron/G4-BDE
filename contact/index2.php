<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
</head>
<body>
    <?php
        if (isset($_POST["message"])){            $message = "Ce  message vous a été envoyé  via la page contact du site du BDE Institut G4
            Nom : " . $_POST["nom"] . "
            Email : " . $_POST["email"] . "
            Nom : " . $_POST["message"];
            $retour  = mail("hetzel.mael01@gmail.com", "message formulaire BDE Institut G4" ,$_POST["nom"] . $_POST["message"],"");
            if ($retour) {
                echo "<p>l'email a bien été envoyé.</p>";
            }
        }
    ?>
    <form method="post">
        <label>nom</label>
        <input type="text" name="nom" required>
        <label>email</label>
        <input type="email" name="email" required>
        <label>message</label>
        <textarea name="message" required></textarea>
        <input type="submit" value="Envoyer le message">
    </form>
</body>
</html>
