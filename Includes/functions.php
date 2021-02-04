<?php 

function head ($title){
    echo "<!DOCTYPE html>";
    echo "<html lang='en'>";
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    // Favicon
    echo "<link rel='shortcut icon' href='./Includes/IMG/favicon.ico' type='image/x-icon' />";
    // Reset CSS
    echo "<link rel='stylesheet' href='./Includes/CSS/reset.css'>";
    // Bootstrap CSS
    echo "<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' integrity='sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh' crossorigin='anonymous'>";
    // Main CSS
    echo "<link rel='stylesheet' href='./Includes/CSS/index.css'>";
    // Variable Title
    echo "<title>" . $title ."</title>";
    echo "</head>";
}

?>