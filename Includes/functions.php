<?php

function Head($title, $standardCSS = false, $adminCSS = false)
{
    echo "<!DOCTYPE html>";
    echo "<html lang='en'>";
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    if ($standardCSS == true) {
        // Favicon
        echo "<link rel='shortcut icon' href='./Includes/IMG/favicon.ico' type='image/x-icon' />";
        // Reset CSS
        echo "<link rel='stylesheet' href='./Includes/CSS/reset.css'>";
        // Bootstrap CSS
        echo "<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css' integrity='sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==' crossorigin='anonymous' />";
        // Main CSS
        echo "<link rel='stylesheet' href='./Includes/CSS/index.css'>";
        // Bootstrap JS
        echo "<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js' integrity='sha512-XKa9Hemdy1Ui3KSGgJdgMyYlUg1gM+QhL6cnlyTe2qzMCYm4nAZ1PsVerQzTTXzonUR+dmswHqgJPuwCq1MaAg==' crossorigin='anonymous'></script>";
        // Jquery
        echo "<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js' integrity'sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==' crossorigin='anonymous'></script>";
    }
    if ($adminCSS == true) {
        // Reset CSS
        echo "<link rel='stylesheet' href='./Includes/CSS/reset.css'>";
        // Favicon
        echo "<link rel='shortcut icon' href='../Includes/IMG/favicon.ico' type='image/x-icon' />";
        // Bootstrap CSS
        echo "<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css' integrity='sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==' crossorigin='anonymous' />";
        // Bootstrap JS
        echo "<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js' integrity='sha512-XKa9Hemdy1Ui3KSGgJdgMyYlUg1gM+QhL6cnlyTe2qzMCYm4nAZ1PsVerQzTTXzonUR+dmswHqgJPuwCq1MaAg==' crossorigin='anonymous'></script>";
        // Jquery
        echo "<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js' integrity'sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==' crossorigin='anonymous'></script>";
        // Special admin CSS
        echo "<link href='../admin/Includes/index.css' rel='stylesheet'>";
    }
    // Variable Title
    echo "<title>" . $title . "</title>";
    echo "</head>";
}

function Session()
{
    session_start();
    session_regenerate_id();
    return $_SESSION['Rank'];
}

function CheckRank($rank)
{
    if (Session() >= $rank) {
        header('Location: ../');
    }
}

function Conn()
{
    $dsn         = "mysql:host=localhost;dbname=portfolio-2";
    $DB_username = "zegert";
    $DB_password = "3312lr2001";

    try {
        $conn = new PDO($dsn, $DB_username, $DB_password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOExeption $e) {
        $error = "Geen connectie mogelijk. Error: " . $e->getMessage();
        return $error;
    }
}

function SelectAll($tablename, $orderitem, $AscDesc = "ASC")
{
    $stmt = Conn()->prepare("SELECT * FROM $tablename ORDER BY $orderitem $AscDesc");
    $stmt->execute();
    return $stmt;
}

function SelectWhere($tablename, $searchfield, $searchitem, $AscDesc = "ASC")
{
    $stmt = Conn()->prepare("SELECT * FROM $tablename WHERE $searchfield = ? ORDER BY $searchfield $AscDesc");
    $stmt->execute([$searchitem]);
    return $stmt;
}