<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Document</title>
        <link rel="stylesheet" href="registrazioni.css">
        <LINK REL="website icon" HREF="GFX/Logo2.png" TYPE="">
    </head>

    <body style="margin-top:5%; font-family: Arial;" >
        <div align="center">
            <form class="form" name="logDati" action="registrazioneCom.php" method="post">

                <p class="title"> Registrati </p> 
                <hr style="border-color: royalblue; width: 75%;">

                <div class="flex" align="center">
                    <label>
                        <input required="" placeholder="" type="text" class="input" name="nome" id="nome">
                        <span>Nome</span>
                    </label>
                    &nbsp&nbsp&nbsp&nbsp
                    <label>
                        <input required="" placeholder="" type="text" class="input" name="cognome" id="cognome">
                        <span>Cognome</span>
                    </label>
                </div>  

                <label>
                    <input required="" placeholder="" type="date" class="input" name="dataNascita" id="dataNascita">
                    <span style="margin-left:35%">Data di nascita </span>
                </label>
                        
                <label>
                    <input required="" placeholder="" type="email" class="input" name="utente" id="utente">
                    <span>Email</span>
                </label> 
                    
                <label>
                    <input required="" placeholder="" type="password" class="input" name="passwordUtente" id="passwordUtente">
                    <span>Password</span>
                </label>

                <br>

                <hr style="border-color: royalblue; width: 75%;">
                
                <button class="submit">Invia </button>

                <?php 

                    SESSION_START();
                    if($_SESSION['erroreB']==true) echo " <div style='color:red'> Email già registrata </div>";
                ?>

                <p class="signin">Hai già un account? <a href="accesso.php">accedi</a> </p>

            </form>
        </div>
    </body>

</html>