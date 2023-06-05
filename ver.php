<?php

include("db.php");


$parCode = $_GET['code'];

$sql4 = "SELECT code FROM gebruikers WHERE code='$parCode'";
$result2 = $connetion->query($sql4);
$row2 = $result2->fetch_assoc();
$checkCode = $row2['code'];

if ($checkCode === $parCode){
    $true = 1;
    $sql = "UPDATE gebruikers SET geactiveerd='$true' WHERE code='$parCode'";
} else{
    die;
}
