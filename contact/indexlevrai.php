<!DOCTYPE html>

<html lang="fr">

<head>
  <link rel="stylesheet" href="style.css"/>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/vnd.icon" href="icons/logo.png">
  <title>Contacts</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
    <script src="javascript_contact.js" defer></script>
</head>      
<!-- head -->
  <body id="body">
    <div id="bande_head_pc">
      <div class="row">
        <div class="col-5">
          <ul class="menu">
            <li>
              <a href="../contact/index2.php">contact formulaire</a>
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
              <a href="#">Contacts</a>
            </li>
          </ul>
        </div>
        <div class="col-2">
          <h1>BDE G4</h1>
        </div>
        <div class="col-4">
          <img src="/icons/logo.png" style="width: 81px; float: right; margin-top: 10px; border-radius: 10%;">
        </div>
      </div>
    </div>

<!-- body -->

    <div id="titre" >
      <h1>CONTACTEZ-NOUS</h1>
    </div>
    <div class="formres">
     <div class="formulaire" class="col-5" >
        <h3>formulaire de contact</h3>
        <p>Laissez nous votre message.</p>
        <form name="register-form" method="post" class="form form-control">
          <div>
            <label for="register-form[name]"></label>
            <input type="text" id="register-form[name]" size="60%" name="name" class="form-control" placeholder="Nom..." />
          </div>
          <div>
            <label for="register-form[email]" ></label>
            <input type="text" id="register-form[email]" name="email" class="form-control" placeholder="e-mail..." />
          </div>
          <div>
            <label for="register-form[message]" ></label>
            <input type="text" id="register-form[message]" name="message" class="form-control" placeholder="Message..."   />
          </div>
            <div class="buttons">
            <input type="submit" value="Envoyer" name="Envoyer" class="btn btn-outline-info" />
          </div>
         </form>
      </div>   
      <div id="reseaux">   
          <h3>Réseaux</h3>
            <img type="button" class="icon" src="/icons/icone_lindin.png">
            <img type="button" class="icon" src="/icons/icone_insta.png">
            <p>Suivez nous sur les réseaux</p>
            <img class="icon" src="/icons/icone_Gmail.png">
            <p>Ou envoyez nous un e-mail via cette adresse</p>
            <p>Adresse e-mail du BDE :</p>
      </div>
    </div>
    
<!--footer  -->
    <div id="bande_foot_pc">
      <div class="row" class="col-1">
        <div id="copyright">
          <h1>BDE G4</h1>
          <a href="../mentions_légales/index.html">Mentions légales</a>
        </div>
        
        <div class="col-5 cadre_menu">
          <ul class="menu">
            <li>
              <a href="../index.html">Acceuil</a>
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
              <a href="#">Contacts</a>
            </li>
          </ul>
        </div>
        </div>
      </div>
  </body>
</html>