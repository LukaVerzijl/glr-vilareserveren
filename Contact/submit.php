<?php 
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
    if(empty($name)){ 
         $valErr .= 'Vul eerst uw naam in.<br/>'; 
    } 
    if(empty($email) || filter_var($email, FILTER_VALIDATE_EMAIL) === false){ 
        $valErr .= 'Vul eerst een geldig E-mail in.<br/>'; 
    } 
    if(empty($subject)){ 
        $valErr .= 'Vul eerst uw onderwerp in.<br/>'; 
    } 
    if(empty($message)){ 
        $valErr .= 'Vul eerst een bericht in.<br/>'; 
    } 
     
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
         
      
        $headers = "MIME-Version: 1.0" . "\r\n"; 
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
       
        $headers .= 'Van:'.$fromName.' <'.$formEmail.'>' . "\r\n"; 
         
        // verzend de email
        @mail($toEmail,$subject2, $htmlContent, $headers); 
         
        $status = 'gelukt!'; 
        $statusMsg = 'Bedankt dat u contact met ons opzoekt, wij komen zo snel mogenlijk bij u terug!'; 
        $postData = ''; 
    }else{ 
        $statusMsg = '<p>Vul eerst de velden in:</p>'.trim($valErr, '<br/>'); 
    } 
}