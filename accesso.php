<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Accedi</title>
        <link rel="stylesheet" href="accesso.css">
        <LINK REL="website icon" HREF="GFX/Logo2.png" TYPE="">
        <style>
        </style>
    </head>

    <body style="font-family: Arial">

      <div align="center" style="margin-top:2%"><IMG SRC="GFX/Logo.png" style="height:10%; width:10%"></div>

        <?php $_SESSION['erroreB'] = false; ?>
          
        <div align="center">
        <form class="form" name="logDati" action="loader.php" method="post"> 
            <p class="form-title" style="color:royalblue;">Accedi</p>

            <div class="input-container">
              <input type="text" placeholder="Inserisci la tua email" name="utente" id="utente">
              <span>
              </span>
            </div>

            <div class="input-container">
              <input type="password" placeholder="Inserisci la tua password" name="passwordUtente" id="passwordUtente">
            </div>

            <button type="submit" class="submit" name="ok" value="Invia" id="ok" />
              conferma
            </button>

            <p style="color:red">
              <?php
                SESSION_START();
                if( $_SESSION["errore"] == true ) echo"Password o/e email errate";
              ?>
            </p>

            <p class="signup-link">
              Non hai un account?
              <a href="registrazioni.php">Registrati</a>
            </p>

        </form>
      </div>
    </body>
</html>