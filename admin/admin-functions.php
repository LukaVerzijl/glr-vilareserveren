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

if(isset($_POST['submit2'])){
    $lvl = 1;
    // krijg data van form
    $name = trim($_POST['user_name']);

    // kijk of de info goed is
    if(empty($name)){
        $valErr .= '* Vul eerst de username in.<br>';
    }

    if(empty($valErr)){
        $status = 'gelukt!';
        $statusMsg = 'U heeft '.$name.' van de admin lijst af gehaald!';

        //Send data to db
        $sql = "UPDATE gebruikers SET lvl='$lvl' WHERE name='$name' ";

        mysqli_query($connetion, $sql);

    }else{
        $statusMsg = 'Vul eerst de velden in:<br><br>'.trim($valErr, '<br/>');
    }
}

if(isset($_POST['submit3'])){
    $true = 1;
    // krijg data van form
    $nameHouse = trim($_POST['huisName']);
    $name = trim($_POST['user_name']);

    // kijk of de info goed is
    if(empty($name)){
        $valErr .= '* Vul eerst de username in.<br>';
    }
    if(empty($nameHouse)){
        $valErr .='* Vul eerst de huisnaam in.<br>';
    }

    if(empty($valErr)){
        $status = 'gelukt!';
        $statusMsg = 'U heeft een bod goedgekeurt!';

        //Send data to db
        $sql = "UPDATE biedingen SET gekeurd='$true' WHERE Huis='$nameHouse' AND Username='$name' ";

        mysqli_query($connetion, $sql);

    }else{
        $statusMsg = 'Vul eerst de velden in:<br><br>'.trim($valErr, '<br/>');
    }
}


// Om de biedingen te pakken uit de database
$sql3 = "SELECT Huis, BodPrijs, Username FROM biedingen ORDER BY BodPrijs,Huis DESC LIMIT 100";
$result = $connetion->query($sql3);

$sql4 = "SELECT id, name FROM gebruikers WHERE lvl = 2";
$result2 = $connetion->query($sql4);