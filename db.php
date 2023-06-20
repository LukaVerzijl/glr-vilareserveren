<?php
//inloggegevens
$serverIp = "127.0.0.1";
$userName = "ukpqvruq_villareserveren";
$passWord = "E5Szz00h8";
$dataBaseName = "ukpqvruq_villareserveren";
$serverPort = "3306";

//Connect
$connetion = new mysqli($serverIp, $userName, $passWord) or die ('Geen verbinding mogenlijk');
mysqli_select_db($connetion, $dataBaseName) or die (mysqli_error($connetion));