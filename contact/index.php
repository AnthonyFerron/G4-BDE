<!DOCTYPE html>

<html lang="fr">

<head>
  <link rel="stylesheet" href="style.css"/>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/vnd.icon" href="../icons/logo.png">
  <title>Contact</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
    <script src="javascript_contact.js" defer></script>
</head>      
<!-- head -->
  <nav class="navigation grid">
    <ul class="links">
      <li>
        <a href="../index.html">Accueil</a>
      </li>

      <li>
        <a href="../pres_membres/index.html">Les Membres</a>
      </li>

      <li>
        <a href="../evenements/index.html">Evenements</a>
      </li>

      <li>
        <a href="../Souvenirs/index.html">Souvenirs</a>
      </li>

      <li>
        <a href="#">Contact</a>
      </li>
    </ul>

    <h1 class="titrea">BDE G4</h1>

    <a>
      <img src="../icons/logo.png" class="logo">
    </a>
  </nav>

<!-- body -->
    <?php
        if (isset($_POST["message"])){            $message = "Ce  message vous a été envoyé  via la page contact du site du BDE Institut G4
            Nom : " . $_POST["nom"] . "
            Email : " . $_POST["email"] . "
            Nom : " . $_POST["message"];
            $retour  = mail("anthony.ferron74@gmail.com", "message formulaire BDE Institut G4" , "Email: ". $_POST["email"]." "."Nom: ".$_POST["nom"] ."  "."Message: ".$_POST["message"],"");
            if ($retour) {
                echo '<div class="alert alert-light text-align-center" role="alert">
                le message a bien été envoyé!
              </div>';
            }
        }
    ?>
    <div id="titre" >
      <h1>CONTACTEZ-NOUS</h1>
    </div>
    <div id="forme" class="formres">
     <div class="formulaire" id="formulaire" class="col-5" >
        <h3>formulaire de contact</h3>
        <p>Laissez nous votre message.</p>
        <form name="register-form" method="post" class="form form-control">
          <div>
            <input type="text" size="60%" name="nom" class="form-control" placeholder="Nom..." required />
          </div>
          <div>
            <input type="text" name="email" class="form-control" placeholder="e-mail..." required />
          </div>
          <div>
            <input type="text" id="register-form[message]" name="message" class="form-control" placeholder="Message..." required />
          </div>
            <div class="buttons">
            <input type="submit" value="Envoyer le message" name="Envoyer" class="btn btn-outline-info" />
          </div>
         </form>
      </div>
         
      <div id="reseaux">   
          <h3>Réseaux</h3>
            <img class="icon" src="../icons/icone_lindin.png"></a>
            <a href="https://www.instagram.com/bdeg4lyon/"><img type="button" class="icon" src="../icons/icone_insta.png"> </a>
            <p>Suivez nous sur les réseaux</p>
            <img class="icon" src="../icons/icone_Gmail.png">
            <p>Ou envoyez nous un e-mail via cette adresse</p>
            <p>Adresse e-mail du BDE :</p>
            <a href="association.ag4l@gmail.com">association.ag4l@gmail.com</a>
      </div>
    </div>
    
    <!--footer  -->
  <nav class="navigation grid footera">
    <ul class="links">
      <li>
        <a href="../index.html">Accueil</a>
      </li>

      <li>
        <a href="../pres_membres/index.html">Les Membres</a>
      </li>

      <li>
        <a href="../evenements/index.html">Evenements</a>
      </li>

      <li>
        <a href="../Souvenirs/index.html">Souvenirs</a>
      </li>

      <li>
        <a href="#">Contact</a>
      </li>
    </ul>

    <div class="div">
      <a class="titrea">BDE G4</a><br><br>
      <a class="mentions" href="../mentions_légales/index.html">Mentions légales</a>
    </div>

    <a>
      <img src="../icons/logo.png" class="logo">
      
    </a>
  </nav>
  </body>
</html>