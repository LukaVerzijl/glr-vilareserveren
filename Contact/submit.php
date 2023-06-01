<?php
//db
include_once 'db.php';

// Email
$toEmail = '89955@glr.nl'; 
$fromName = ''; 
$formEmail = ''; 
 
$postData = $statusMsg = $valErr = '';
$status = 'error';
 
// Als het goed gaat met de form
if(isset($_POST['submit'])){
    // krijg data van form
    $postData = $_POST; 
    $name = trim($_POST['name']); 
    $email = trim($_POST['email']); 
    $subject = trim($_POST['subject']); 
    $message = trim($_POST['message']); 
     
    // kijk of de info goed is
        //    if(empty($name)){
        //         $valErr .= '* Vul eerst uw naam in.<br>';
        //    }
        //    if(empty($email) || filter_var($email, FILTER_VALIDATE_EMAIL) === false){
        //        $valErr .= '* Vul eerst een geldig E-mail in.<br>';
        //    }
        //    if(empty($subject)){
        //        $valErr .= '* Vul eerst uw onderwerp in.<br>';
        //    }
        //    if(empty($message)){
        //        $valErr .= '* Vul eerst een bericht in.<br>';
        //    }

    if(empty($valErr)){ 
        // maak de email
        $subject2 = 'Nieuwe contact form'; 
        $htmlContent = " 
            <h2>Contact form Villa</h2> 
            <p><b>Naam: </b>".$name."</p> 
            <p><b>Email: </b>".$email."</p> 
            <p><b>Onderwerp: </b>".$subject."</p> 
            <p><b>Bericht: </b>".$message."</p> 
        ";

        $subject3 = "Villa's 4 U Bevestiging!";
        $htmlContent2 = " 
            <h2>Bevestiging contactformulier</h2> 
            <img id='img' src='https://cdn.discordapp.com/attachments/405360752602644480/1111195741315153950/logovilla4u-mail.png'>
            <p>beste ".$name.",</p> 
            <p>Wij hebben dit bericht van u ontvangen vanaf deze E-mail: ".$email.".</p> 
            <p><b>Onderwerp: </b>".$subject."</p> 
            <p><b>Bericht: </b>".$message."</p> 
        ";
         
      
        $headers = "MIME-Version: 1.0" . "\r\n"; 
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
       
        $headers .= 'Van:'.$fromName.' <'.$formEmail.'>' . "\r\n"; 
         
        // verzend de email
        //Admin
        @mail($toEmail,$subject2, $htmlContent, $headers);
        //User
        @mail($email, $subject3, $htmlContent2, $headers);
         
        $status = 'gelukt!'; 
        $statusMsg = 'Bedankt dat u contact met ons opzoekt, wij komen zo snel mogenlijk bij u terug!'; 
        $postData = '';

        //Send data to db
        $sql = "INSERT INTO contact (naam, email, onderwerp, bericht)
                VALUES ('$name','$email','$subject','$message');";

        mysqli_query($connetion, $sql);

    }else{ 
        $statusMsg = 'Vul eerst de velden in:<br><br>'.trim($valErr, '<br/>');
    } 
}
