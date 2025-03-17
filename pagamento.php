<!DOCTYPE html>
<html lang="en">

<head>
        <title>Pagamento</title>
        <link rel="stylesheet" href="pagamento.css">

        <script>
            function logout() { window.location.href = "sessionDestroyer.php"; }
            function home() { window.location.href = "index.php"; }

            function submitForm(event) 
                {
                    event.preventDefault();
                    event.target.form.submit();
                }

        </script>

        <style>
            
        </style>

    </head>


    <body style="font-family: Arial; margin-left:15%; margin-top:5%">

        <?php

            /* ********* PER VEDERE GLI ERRORI  *********** */

                //error_reporting(E_ALL);
                //ini_set('display_errors', TRUE);
                //ini_set('display_startup_errors', TRUE);

            /* ********* PER VEDERE GLI ERRORI  *********** */

        ?>

        <?php

        SESSION_START();
        $conn = mysqli_connect('localhost', 'CERILLI', 'Scirocco2023', 'Cerilli_db1');
        $utente=$_SESSION['utente'];      

        ?>
        
        <div style="margin-left:20%; margin-right:40%; font-size: 150%">

            <table border="0" >

                <?php
                    $tab="giochi_txt_1";
                    $conn = mysqli_connect('localhost', 'CERILLI', 'Scirocco2023', 'Cerilli_db1');

                    $sql="SELECT * FROM $tab ORDER BY Titolo";

                    $result = mysqli_query($conn, $sql);  
                    $righe = mysqli_num_rows($result);

                    $somma=0;

                    for($NUM=0; $NUM<=$righe; $NUM++)
                        {
                            if($_POST[$NUM] == "on")
                                {
                                    $sql="SELECT Titolo,Editore,Pubblicazione,Genere,PEGI,Prezzo FROM giochi_txt_1 WHERE NUM=$NUM-1";
                                    $result = mysqli_query($conn, $sql);
                                    
                                    while( $row = mysqli_fetch_assoc($result) )
                                        {
                                            echo "<TR>" ;
                                                echo "<TD> &nbsp" . $nome = $row['Titolo'] . " &nbsp</TD>";
                                                echo "<TD align='center'> &nbsp " . $nome = $row['Prezzo'] . "€ &nbsp </TD>";
                                            echo "</TR>";

                                            $somma = $somma + $nome = $row['Prezzo'];

                                        }
                                }
                        }

                ?>

            </table>
            <hr>
            Totale = <?php echo $somma . "€"; ?>
            <br><br>
            Sconti applicati: -100% 
            <br><br>
            Prezzo finale = <?php echo $somma=0 . "€"; ?>

            <div style="margin-left:50%">
                <form action="pagamentoCom.php" method="POST">
                    <button type="submit" class="Btn">
                    Pay
                    <svg class="svgIcon" viewBox="0 0 576 512"><path d="M512 80c8.8 0 16 7.2 16 16v32H48V96c0-8.8 7.2-16 16-16H512zm16 144V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V224H528zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm56 304c-13.3 0-24 10.7-24 24s10.7 24 24 24h48c13.3 0 24-10.7 24-24s-10.7-24-24-24H120zm128 0c-13.3 0-24 10.7-24 24s10.7 24 24 24H360c13.3 0 24-10.7 24-24s-10.7-24-24-24H248z"></path></svg>
                    </button>
                </form>
            </div>
            
        </div>
        
    </body>
</html>