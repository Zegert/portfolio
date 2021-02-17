<?php

require_once '../Includes/functions.php';
checkRank(1);

$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

try {
    $stmt = Conn()->prepare("INSERT INTO admin(ID, Username, Password, Rank)
        VALUES (?, ?, ?, ?)");
    $stmt->execute([null, $_POST['username'], $password, $_POST['rank']]);
} catch (PDOException $e) {
    echo "Nieuwe gebruiker niet toegevoegd. Error: " . $e;
}
header("Location:home.php");