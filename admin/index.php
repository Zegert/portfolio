<?php
require_once '../Includes/functions.php';
Head("Admin panel || Zegert Boele || Webdevelopemnt", true);
?>

<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <div class="fadeIn first">
                <img src="https://cdn0.iconfinder.com/data/icons/set-ui-app-android/32/8-512.png" id="icon"
                    alt="User Icon" />
            </div>

            <!-- Login Form -->
            <form action="loginProcess.php" method="POST" class="form_big">
                <input type="text" class="input fadeIn second" name="inputUsername" id="inputUsername" value=""
                    autocomplete="username" placeholder="Gebruikersnaam..."><br>
                <input type="password" class="input fadeIn third" name="inputPassword" id="inputPassword" value=""
                    autocomplete="current-password" placeholder="Wachtwoord..."><br>

                <input type="submit" class="input fadeIn fourth" id="submit" value="Login" name="submit"><br>
                <a href="../">Ga terug</a>
            </form>
        </div>
</body>

</html>