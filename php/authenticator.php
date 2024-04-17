<?php
session_start();
include 'db.php';

if (isset($_SESSION['id_user'])) {
    $IDuser = $_SESSION['id_user'];
    if($IDuser === ''){
        unset($IDuser);
    }
}
require_once 'PHPGangsta/GoogleAuthenticator.php';

$ga = new PHPGangsta_GoogleAuthenticator();
$secret = $ga->createSecret();

$add_secret  = "UPDATE users SET secret_key = '$secret' WHERE id_user= '$IDuser'";
$result = mysqli_query($connect, $add_secret);

header("location: account.php");