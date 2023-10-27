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

  <nav id="mobilemenu">

    <div class="parent">
      <label for="toggle">☰</label>
      <input type="checkbox" id="toggle" class="label">
      <div class="div1"> 
        <a href="../index.html">Accueil</a>
        <a href="../evenements/index.html">Évenements</a>
        <a href="../pres_membres/index.html">Les Membres</a>
        <a href="../Souvenirs/index.html">Souvenirs</a>
        <a href="#">Contact</a> 
      </div>
        

      <div class="div2">          
      </div>
      <div class="div3">
        <img class="logo" src="../icons/logo.png">
      </div>
    </div>

  </nav>

  <script>
    document.querySelector("#toggle").onclick = function() {
    document.querySelector(".div3").style.display=(window.getComputedStyle(document.querySelector('.div3')).display=='none') ? "flex" : "none";}
  </script>

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
        <h3>Formulaire de contact</h3>
        <p class="texte">Laissez nous votre message.</p>
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
            <div class="btn">
            <input type="submit" value="Envoyer le message" name="Envoyer" class=" btn btn-outline-info"/>
          </div>
         </form>
      </div>
         
      <div id="reseaux">   
          <h3 class="titre-reseaux">Réseaux</h3>
            <a href="https://www.instagram.com/bdeg4lyon/"><img type="button" class="icon" src="../icons/icone_insta.png"> </a>
            <p class="texte">Suivez nous sur les réseaux</p>
            <img class="icon" src="../icons/icone_Gmail.png">
            <p class="texte">Ou envoyez nous un e-mail via cette adresse</p>
            <p class="texte">Adresse e-mail du BDE :</p>
            <p class="adresse-reseaux"> association.ag4l@gmail.com </p>
      </div>
    </div>
    
    <!--footer  -->

  <nav id="foot">

    <div class="f_parent">
      <div class="f_div1"> 
        <a id="scroll-up" class="scroll-up" href="#">
          <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 0h24v24H0z" fill="none"></path>
            <path fill="rgba(255,255,255,1)" d="M11.9997 10.8284L7.04996 15.7782L5.63574 14.364L11.9997 8L18.3637 14.364L16.9495 15.7782L11.9997 10.8284Z">
            </path>
          </svg>
        </a>
      </div>
        

      <div class="f_div2">
        <a href="../mentions_légales/index.html">Mentions légales</a> 
      </div>
      <div class="f_div3">
        <img class="logo" src="../icons/logo.png">
      </div>
    </div>
  </nav>

  </body>
</html>