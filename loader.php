<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Document</title>
    <style>
      .code-loader {
      color: #00f;
      font-family: Consolas, Menlo, Monaco, monospace;
      font-weight: bold;
      font-size: 100px;
      opacity: 0.8;
      }

      .code-loader span {
      display: inline-block;
      animation: pulse_414 0.4s alternate infinite ease-in-out;
      }

      .code-loader span:nth-child(odd) {
      animation-delay: 0.4s;
      }

      @keyframes pulse_414 {
      to {
        transform: scale(0.8);
        opacity: 0.5;
      }
      }
    </style>
  </head>
  <body>

      <?php
        /* ********* PER VEDERE GLI ERRORI  *********** */

            error_reporting(E_ALL);
            ini_set('display_errors', TRUE);
            ini_set('display_startup_errors', TRUE);

        /* ********* PER VEDERE GLI ERRORI  *********** */
      ?>

      <br><br><br><br><br>

      <div class="code-loader" align="center">
      <span>{</span><span>}</span>
      </div>

      <?php

        SESSION_START();
        $conn = mysqli_connect('localhost', '###', '###', '###');
        $_SESSION['conn'] = $conn;

        $_SESSION['utente'] = $_POST['utente'];
        $_SESSION['passwordUtente'] = $_POST['passwordUtente'];

        $utente = $_SESSION['utente'];
        $password = $_SESSION['passwordUtente'];

        $tab = "email";
        $sql = "SELECT * FROM $tab where email='$utente' and password='$password' ";
        $result = mysqli_query($_SESSION['conn'],$sql);
        $conta=mysqli_num_rows($result);

        $randTime =rand(1000,5000);

        if ($conta == 0)
        {
          $_SESSION["errore"]=true;
          $_SESSION['utente'] = "";

          echo "<script>" .
          "function Redirect(){" .
          "window.location.href = 'accesso.php';" .
          "}" .
          "setTimeout('Redirect()', $randTime);" .
          "</script>";

        }
        else 
        {
          $_SESSION['errore'] = false;
          $_SESSION['utente'] = $_POST['utente'];

          echo "<script>" .
          "function Redirect(){" .
          "window.location.href = 'index.php';" .
          "}" .
          "setTimeout('Redirect()', 2000);" .
          "</script>";

        }

      ?>

  </body>
</html>
