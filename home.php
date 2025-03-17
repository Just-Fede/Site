<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="home.css">
        <style>
            
            table, th, td 
                {
                    padding: 15px;
                    border: 1px solid white;
                    border-collapse: collapse;
                }

            th, td 
                {
                    background-color: #96D4D4;
                }

        </style>

    </head>

    <body style="font-family: Arial; margin-bottom:20%" align="center">
    

       <?php 

        SESSION_START();

            /* ********* PER VEDERE GLI ERRORI  *********** */

                error_reporting(E_ALL);
                ini_set('display_errors', TRUE);
                ini_set('display_startup_errors', TRUE);

            /* ********* PER VEDERE GLI ERRORI  *********** */

            $conn = mysqli_connect('localhost', 'CERILLI', 'Scirocco2023', 'Cerilli_db1');
            $utente=$_SESSION['utente'];
    
        ?>

        <?php

            $tab="giochi_txt_1";

            $sql="SELECT * FROM $tab ORDER BY Titolo";
            $result = mysqli_query($conn, $sql);  

        ?>

        <div align="center"> <img src="GFX/Logo.png" style="height:25%; width:25%"> </div>

        <form action="pagamento.php" method="POST">

            <div style="margin-left:7%; width:10%; height:10%">
                <button  type="submit" value="Acquista" data-tooltip="Acquista" class="buttons">
                    <div style="margin-bottom:20%">
                        <div  class="buttons-wrapper">
                            <div class="text" style="opacity:1">Aquista</div>
                                <span class="icon">
                                    <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"></path>
                                    </svg>
                                </span>
                        </div>
                    </div>
                </button>

            </div>

            <br>

            <div style="margin-left:5%">

                <table border="2" >
                    <tr style="border-radius: 10px">
                        <th>Titolo</th>
                        <th>Editore</th>
                        <th>Anno</th>
                        <th>Genere</th>
                        <th>PEGI</th>
                        <th>Prezzo</th>
                        <th>Aggiungi</th>
                    </tr>

                    <?php
                        while($row = mysqli_fetch_assoc($result)) 
                        {
                            $NUM = $row['NUM'];
                            $NUM++;
                            echo "<TR>" ;
                            echo "<TD> &nbsp" . $nome = $row['Titolo'] . " &nbsp</TD>";
                            echo "<TD> &nbsp" . $nome = $row['Editore'] . "&nbsp </TD>";
                            echo "<TD align='center'> " . $nome = $row['Pubblicazione'] . " </TD>";
                            echo "<TD> &nbsp" . $nome = $row['Genere'] . "&nbsp </TD>";
                            echo "<TD align='center'> &nbsp" . $nome = $row['PEGI'] . "&nbsp </TD>";
                            echo "<TD align='center'> &nbsp " . $nome = $row['Prezzo'] . "€ &nbsp </TD>";
                            echo"<TD align='center'> " . "<label class='container'> <input type='checkbox' name=$NUM> <div class='checkmark'> </div> </label>" . "</TD>";
                            //echo "<TD> &nbsp" . $row['NUM'] . " &nbsp</TD>";
                            echo "</TR>";
                        }

                    ?>
                    
                </TABLE>

            </div>

        </form>

    </body>

</html>