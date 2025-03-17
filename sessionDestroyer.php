<!DOCTYPE html>
<html lang="en">
    <head>
        <script>
            // Funzione per eseguire il reindirizzamento nell'intera finestra
            function redirectTop(url) {
                window.top.location.href = url;
            }

            // Esempio di utilizzo: chiamare la funzione per eseguire il reindirizzamento nell'intera finestra
            redirectTop("accesso.php");
        </script>
    </head>

    <body>
        <?php
            SESSION_START();
            SESSION_DESTROY();
            exit();
        ?>
    </body>
</html>