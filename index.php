<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Easy Software</title>
        <LINK REL="website icon" HREF="GFX/Logo2.png" TYPE="">
            <script>
                function logout() { window.location.href = "sessionDestroyer.php"; }

                function submitForm(event) 
                    {
                        event.preventDefault();
                        event.target.form.submit();
                    }
            </script>
            
            <style>
                body 
                {
                overflow:hidden;
                margin-right:2%;
                margin-left:2%;
                }
            </style>

    </head>

        <iframe src="frameBenvenuto.php" id="top" width="100%"  scrolling="no" frameborder="1"  style="border-radius: 25px; border-color:transparent "> </iframe>  
            <?php

                SESSION_START();

                if ( $_SESSION['utente'] == "" || $_SESSION['passwordUtente'] == "" )  
                {
                    
                    header('Location: accesso.php');
                    exit();
                }

            ?>

        <iframe src="home.php" id="bot" width=98% style="position: absolute; height: 100%;" scrolling="yes" frameborder="0" > </iframe>  

    </body>

</html>
