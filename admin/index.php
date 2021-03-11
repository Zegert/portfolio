<?php
require_once '../Includes/functions.php';
Head("Admin panel || Zegert Boele || Webdevelopemnt", false, true);
?>

<body>
    <div class="main">
        <p class="sign" align="center">Sign in</p>
        <form action="loginProcess.php" method="POST" class="form1">
            <input class="un" type="text" align="center" name="inputUsername" id="inputUsername" value=""
                autocomplete="username" placeholder="Gebruikersnaam...">
            <input class="pass" type="password" align="center" name="inputPassword" id="inputPassword" value=""
                autocomplete="current-password" placeholder="Wachtwoord...">
            <input type="submit" class="submit" align="center">
            <p class="forgot" align="center"><a href="../">Return to website</p>
        </form>
    </div>
</body>

</html>