<!DOCTYPE html>
<html lang="en">

    <head>
        <link rel="stylesheet" href="home.css">
        <script>
            function logout() { window.location.href = "sessionDestroyer.php"; }

            function submitForm(event) 
                {
                    event.preventDefault();
                    event.target.form.submit();
                }
                
                function redirectTop(url) 
                {
                    window.top.location.href = url;
                }
        </script>
    </head>

    <body class="fixed-top" style="margin-top: 1%; margin-left: 2%; z-index:1; background-color:#f2f2f2; font-family: Arial;">
        <div>

            <?php

                SESSION_START();

            ?>

            <?php 

                    /* ********* PER VEDERE GLI ERRORI  *********** */

                        error_reporting(E_ALL);
                        ini_set('display_errors', TRUE);
                        ini_set('display_startup_errors', TRUE);

                    /* ********* PER VEDERE GLI ERRORI  *********** */

                    $conn = mysqli_connect('localhost', '###', '###', '###');
                    $utente=$_SESSION['utente'];

                    $sql = "SELECT Nome FROM registrazioni WHERE registrazioni.ID = (SELECT ID FROM email WHERE email = '$utente')";
                    $result = mysqli_query($conn, $sql);
                    
                    
                    while($nome = mysqli_fetch_assoc($result)) 
                        {
                            echo "<div style='color:#6B7280'; align='center'> <font size='6'> Benvenuto " . $nome['Nome'] . " </font> </div>"; 
                            break;
                        }
            ?>

            <TABLE>
                <TR>

                    <TD>
                        <div>
                            <button class="button" onclick="redirectTop('index.php')" >
                            <svg class="svg-icon" width="24" viewBox="0 0 24 24" height="24" fill="none"><g stroke-width="2" stroke-linecap="round" stroke="#056dfa" fill-rule="evenodd" clip-rule="evenodd"><path d="m3 7h17c.5523 0 1 .44772 1 1v11c0 .5523-.4477 1-1 1h-16c-.55228 0-1-.4477-1-1z"></path><path d="m3 4.5c0-.27614.22386-.5.5-.5h6.29289c.13261 0 .25981.05268.35351.14645l2.8536 2.85355h-10z"></path></g></svg>
                            <span class="lable">Home</span>
                            </button>
                        </div>
                    </TD>

                    <TD>
                        <div>
                            <button class="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 20 20" height="20" fill="none" class="svg-icon"><g stroke-width="1.5" stroke-linecap="round" stroke="#5d41de"><circle r="2.5" cy="10" cx="10"></circle><path fill-rule="evenodd" d="m8.39079 2.80235c.53842-1.51424 2.67991-1.51424 3.21831-.00001.3392.95358 1.4284 1.40477 2.3425.97027 1.4514-.68995 2.9657.82427 2.2758 2.27575-.4345.91407.0166 2.00334.9702 2.34248 1.5143.53842 1.5143 2.67996 0 3.21836-.9536.3391-1.4047 1.4284-.9702 2.3425.6899 1.4514-.8244 2.9656-2.2758 2.2757-.9141-.4345-2.0033.0167-2.3425.9703-.5384 1.5142-2.67989 1.5142-3.21831 0-.33914-.9536-1.4284-1.4048-2.34247-.9703-1.45148.6899-2.96571-.8243-2.27575-2.2757.43449-.9141-.01669-2.0034-.97028-2.3425-1.51422-.5384-1.51422-2.67994.00001-3.21836.95358-.33914 1.40476-1.42841.97027-2.34248-.68996-1.45148.82427-2.9657 2.27575-2.27575.91407.4345 2.00333-.01669 2.34247-.97026z" clip-rule="evenodd"></path></g></svg>
                            <span class="lable">Settings</span>
                            </button>
                        </div>
                    </TD>

                        <div align="right"  onclick="logout()" style="margin-right: 2%">
                            <button class="Btn">
                                <div class="sign"><svg viewBox="0 0 512 512"><path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path></svg></div>
                                <div class="text" style ="color:black; margin-left:0% ;position:relative; margin-bottom:15%">&nbsp&nbsp Logout</div>
                            </button>
                        </div>

                </TR>
            <TABLE>

                    </div>
                    </body>


</html>
