<?php
$retour  = mail("hetzel.mael01@gmail.com", "coucou les amigos","");
if ($retour) {
    echo "<p>l'email a bien été envoyé.</p>"
}
?>

<form method="post">
    <label></label>
    <input type="email" name="email" required>
    <label></label>
    <input type="text" name="sujet" required>
    <textarea name="message" required></textarea>
    <input type="submit" value="Envoyer le message" >
</form>