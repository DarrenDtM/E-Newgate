<?php
// Vue

// Fonction pour afficher le formulaire de connexion
function afficherFormulaireConnexion($erreur = '') {
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Page de connexion</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <style>
            body {
                background-color: #f2f2f2;
                font-family: Arial, sans-serif;
            }

            h2 {
                color: #333333;
            }

            form {
                width: 300px;
                margin: 0 auto;
                padding: 20px;
                background-color: #ffffff;
                border: 1px solid #dddddd;
            }

            label {
                display: block;
                margin-bottom: 10px;
                color: #666666;
            }

            input[type="text"],
            input[type="password"] {
                width: 100%;
                padding: 10px;
                margin-bottom: 20px;
                border: 1px solid #dddddd;
            }

            input[type="submit"] {
                width: 100%;
                padding: 10px;
                background-color: #337ab7;
                color: #ffffff;
                border: none;
                cursor: pointer;
            }

            input[type="submit"]:hover {
                background-color: #23527c;
            }

            p.error {
                color: #ff0000;
                margin-top: 10px;
            }
        </style>
    </head>
    <body>
    <header>
  <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
    <div class="container">
      <a href="../index.php" class="navbar-brand">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24">
          <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/>
          <circle cx="12" cy="13" r="4"/>
        </svg>
        <strong>Devil</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="login.php">Connexion</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="inscription.php">Inscription</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
        <h2>Connexion</h2>
        <?php if ($erreur !== '') { echo "<p class=\"error\">$erreur</p>"; } ?>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="email">Email:</label>
            <input type="text" name="email" id="email" required><br><br>
            <label for="motdepasse">Mot de passe:</label>
            <input type="password" name="motdepasse" id="motdepasse" required><br><br>
            <input type="submit" value="Se connecter">
        </form>
    </body>
    </html>
    <?php
}

function afficherProfil($client)
{
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <title>Profil</title>
        <style>
            body {
                background-color: #f2f2f2;
                font-family: Arial, sans-serif;
            }

            h2 {
                color: #333333;
            }

            p {
                color: #666666;
            }
        </style>
    </head>
    <body>
    <header>
  <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
    <div class="container">
      <a href="../index.php" class="navbar-brand">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24">
          <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/>
          <circle cx="12" cy="13" r="4"/>
        </svg>
        <strong>Devil</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="login.php">Connexion</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="inscription.php">Inscription</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
        <h2>Profil</h2>
        <p>Nom: <?php echo $client['nom']; ?></p>
        <p>Prénom: <?php echo $client['prenom']; ?></p>
        <p>Email: <?php echo $client['email']; ?></p>
        <p>Téléphone: <?php echo $client['telephone']; ?></p>
        <p>Genre: <?php echo $client['genre']; ?></p>
    </body>
    </html>
    <?php
}


// Fonction pour afficher une erreur
function afficherErreur($message) {
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <title>Erreur</title>

        <style>
            body {
                background-color: #f2f2f2;
                font-family: Arial, sans-serif;
            }

            h2 {
                color: #333333;
            }

            p {
                color: #666666;
            }
        </style>
    </head>
    <body><header>
  <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
    <div class="container">
      <a href="../index.php" class="navbar-brand">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24">
          <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/>
          <circle cx="12" cy="13" r="4"/>
        </svg>
        <strong>Devil</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="login.php">Connexion</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="inscription.php">Inscription</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

    
        <h2>Erreur</h2>
        <p><?php echo $message; ?></p>
    </body>
    </html>
    <?php
}
?>
