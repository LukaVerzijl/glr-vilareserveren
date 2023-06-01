<?php
//db
include_once 'db.php';

$postData = $statusMsg = $valErr = '';
$status = 'error';


// Als het goed gaat met de form
if(isset($_POST['submit'])){
    $lvl = 2;
    // krijg data van form
    $name = trim($_POST['user_name']);

    // kijk of de info goed is
    if(empty($name)){
        $valErr .= '* Vul eerst de username in.<br>';
    }

    if(empty($valErr)){
        $status = 'gelukt!';
        $statusMsg = 'U heeft '.$name.' admin-rechten gegeven!';

        //Send data to db
        $sql = "UPDATE gebruikers SET lvl='$lvl' WHERE name='$name' ";

        mysqli_query($connetion, $sql);

    }else{
        $statusMsg = 'Vul eerst de velden in:<br><br>'.trim($valErr, '<br/>');
    }
}


// Om de biedingen te pakken uit de database
$query = "SELECT Huis,BodPrijs from biedingen  ORDER BY Huis ASC, BodPrijs DESC LIMIT 1;";
$sql2 = mysqli_query($connetion, $query);