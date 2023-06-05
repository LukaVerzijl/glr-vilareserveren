<?php

include("db.php");


$parCode = $_GET['code'];

$sql4 = "SELECT code FROM gebruikers WHERE code='$parCode'";
$result2 = $connetion->query($sql4);
$row2 = $result2->fetch_assoc();
$checkCode = $row2['code'];
echo $parCode;
echo $checkCode;

$query = mysqli_query($connetion, "SELECT 'code' FROM 'gebruikers' WHERE 'code' = '$parCode'");
if (empty($query)) {
    $exists = "false";
}
else {
    $true = 1;
    $sql = "UPDATE gebruikers SET geactiveerd='$true' WHERE code='$parCode'";

    mysqli_query($connetion, $sql);
}