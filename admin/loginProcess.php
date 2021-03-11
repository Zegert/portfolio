<?php
require_once '../Includes/functions.php';
$username = $_POST['inputUsername'];
$password = $_POST['inputPassword'];

$result = Conn()->prepare("SELECT * FROM admin WHERE Username=?");
$result->execute([$username]);
$row = $result->fetch();

if (password_verify($password, $row['Password'])) {
    $_SESSION['ID']   = $row['ID'];
    $_SESSION['Rank'] = $row['Rank'];
    if ($_SESSION['Rank'] >= 1) {
        header("Location: home.php");
    }
} else {
    header("Location: ../");
}