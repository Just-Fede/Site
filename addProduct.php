<!DOCTYPE html>
<html lang="en">
        
    <head>
        <title>Aggiungi prodotti</title>
    </head>

    <body>

        <h1>Aggiungi prodotti</h1>

        <?php

            /* ********* PER VEDERE GLI ERRORI  *********** */

                error_reporting(E_ALL);
                ini_set('display_errors', TRUE);
                ini_set('display_startup_errors', TRUE);

            /* ********* PER VEDERE GLI ERRORI  *********** */

        ?>

        <br>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >

            <input type="text" placeholder="Nome admin" name="adminN">
            <input type="password" placeholder="Password admin" name="adminP">

            <hr>

            <input type="text" placeholder="Nome gioco" name="nome">
            <input type="text" placeholder="Sviluppatore" name="editore">
            <input type="text" placeholder="Anno d'uscita" name="anno">
            <input type="text" placeholder="Genere" name="genere">
            <input type="text" placeholder="PEGI" name="pegi">
            <input type="number" placeholder="Prezzo" name="prezzo">

            <br><br>

            <button type="submit" class="submit" name="Invia" value="Invia"> Aggiungi </button>

        </form>

        <div>

            <?php
                        if (isset($_POST["Invia"]) ) 
                        {
                        $adminN = $_POST["adminN"];
                        $adminP = $_POST["adminP"];

                        echo "<br>";

                        echo $nome = $_POST['nome'];
                        echo $editore = $_POST['editore'];
                        echo $anno = $_POST['anno'];
                        echo $genere = $_POST['genere'];
                        echo $pegi = $_POST['pegi'];
                        echo $prezzo = $_POST['prezzo'];
                        }

                        echo "<br>";

                        SESSION_START();
                        $conn = mysqli_connect('localhost', $adminN, $adminP, '###');

                        echo "<br>";
                        
                        $sql="SELECT NUM FROM giochi_txt_1 ORDER BY NUM DESC LIMIT 1";
                        $result=mysqli_query($conn,$sql);
                        $lastNUM = mysqli_fetch_assoc($result);
                        $endNUM = $lastNUM['NUM'] + 1;

                        $sql="INSERT INTO giochi_txt_1 
                            (Titolo, Editore, Pubblicazione, Genere, PEGI, Prezzo, NUM) 
                            VALUES('$nome', '$editore', '$anno', '$genere', '$pegi', '$prezzo', '$endNUM')";

                        echo $sql;
                        mysqli_query($conn,$sql);
                ?>

        </div>

    </body>

</html>
