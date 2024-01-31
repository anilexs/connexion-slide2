<head>
    <link rel="stylesheet" href="css/connexion.css">
    <link rel="icon" type="image/png" href="images/logo/logo.png">
</head>
<div class="container" id="container">
  <div class="form-container sign-up-container">
    <form action="#">
    <!--<img class="bot" src="images/bot.gif"/>-->
      <h1>Créez votre compte</h1>
      <span>Entrez vos informations</span>
      <input type="text" placeholder="Nom" />
      <input type="email" placeholder="Adresse mail" />
      <input type="password" placeholder="Mot de passe" />
      <button>S'inscrire</button>
    </form>
  </div>
  <div class="form-container sign-in-container">
    <form action="#">
      <h1>Plateforme All For One</h1>
      <!--<img class="bot" src="images/bot.gif"/>-->
      <h1>Se connecter</h1>
 
      <span>Entrez vos informations</span>
      <input type="email" placeholder="Adresse mail" />
      <input type="password" placeholder="Mot de passe" />
      <a href="#">Mot de passe oublié ?</a>
      <button>Se connecter</button>
    </form>
  </div>
  <div class="overlay-container">
    <div class="overlay">
      <div class="overlay-panel overlay-left">
      <!--<img class="standard" src="images/laptop-logo.png"/>-->
        <h1>Vous avez déjà un compte ?</h1>
        <p>Connectez-vous pour accéder à la plateforme</p>
        <button class="ghost" id="signIn">Se connecter</button>
      </div>
      <div class="overlay-panel overlay-right">
        <?php include 'communaute.html' ?>
        <h1>Rejoignez notre communauté !</h1>
        <p>Inscrivez-vous dès maintenant</p>
        <button class="ghost" id="signUp">S'inscrire</button>
      </div>
    </div>
  </div>
</div>
<script src="js/connexion.js"></script>