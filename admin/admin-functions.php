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

        //Pak data van de user
        $sql5 = "SELECT email, name FROM gebruikers WHERE name='$name'";
        $result5 = $connetion->query($sql5);
        $row = $result5->fetch_assoc();
        $email = $row['email'];

        $sql6 = "SELECT MAX(BodPrijs)AS BodPrijs FROM biedingen WHERE Username='$name' AND Huis='$nameHouse'";
        $result6 = $connetion->query($sql6);
        $row2 = $result6->fetch_assoc();
        $bod = $row2['BodPrijs'];


        // Email
        $toEmail = $email;
        $fromName = "Villa's 4 U";
        $formEmail = '';

        $postData = $statusMsg = $valErr = '';
        $status = 'error';



            $postData = $_POST;

            $subject3 = "Villa's 4 U bod goed gekeurd!";
            $htmlContent2 = " 
            <h2>Bevestiging bod</h2> 
            <img id='img' src='https://cdn.discordapp.com/attachments/405360752602644480/1111195741315153950/logovilla4u-mail.png'>
            <p>beste ".$name.",</p> 
            <p>Uw bod is goedgekeurd!</p> 
            <p><b>Bod: </b>€ ".$bod."</p> 
            <p><b>Huis: </b>".$nameHouse."</p> 
        ";


            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            $headers .= 'Van:'.$fromName.' <'.$formEmail.'>' . "\r\n";

            // verzend de email
            //User
            @mail($email, $subject3, $htmlContent2, $headers);

            $status = 'gelukt!';
            $postData = '';


    }else{
        $statusMsg = 'Vul eerst de velden in:<br><br>'.trim($valErr, '<br/>');
    }
}


// Om de biedingen te pakken uit de database
$sql3 = "SELECT Huis, Username , MAX(BodPrijs)AS BodPrijs FROM biedingen GROUP BY Huis";

$result = $connetion->query($sql3);

$sql4 = "SELECT id, name FROM gebruikers WHERE lvl = 2";
$result2 = $connetion->query($sql4);