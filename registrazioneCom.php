<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Document</title>
    </head>
        
    <body>
        <?php 

        /* ********* PER VEDERE GLI ERRORI  *********** */

            error_reporting(E_ALL);
            ini_set('display_errors', TRUE);
            ini_set('display_startup_errors', TRUE);

        /* ********* PER VEDERE GLI ERRORI  *********** */

            SESSION_START();
        
            $utente = $_SESSION['utente'] = $_POST['utente'];
            $passwordUtente = $_SESSION['passwordUtente'] = $_POST['passwordUtente'];

            $nome = $_SESSION['nome'] = $_POST['nome'];     
            $cognome = $_SESSION['cognome'] = $_POST['cognome'];   
            $eta = $_SESSION['eta'] = $_POST['dataNascita'];   

            $conn = mysqli_connect('localhost', '###', '###', '###');
            $_SESSION['conn'] = $conn;

            $sql= "SELECT * FROM email WHERE email ='$utente' ";
            
            
            if ($conta=mysqli_num_rows( mysqli_query($_SESSION['conn'],$sql)) == 0)
            {
                $sql = "INSERT INTO registrazioni (Nome,Cognome,Eta) VALUES ('$nome', '$cognome', '$eta')";
                $result = mysqli_query($_SESSION['conn'], $sql);

                echo $lastID = mysqli_insert_id($conn);

                $sql = "INSERT INTO email VALUES ($lastID,'$utente', '$passwordUtente')";
                $result = mysqli_query($_SESSION['conn'], $sql);

                $_SESSION['errore'] = false;

                header('Location: index.php');
                exit();
            }
            
            else 
            {
                $_SESSION['erroreB'] = true;
                header('Location: registrazioni.php');
                exit();
            }
            
        ?>
    </body>
</html>
