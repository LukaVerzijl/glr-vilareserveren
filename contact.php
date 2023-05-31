<link rel="stylesheet" href="Contact/contact.css">
<?php include 'db.php'; ?>
<?php
session_start();

include("Login-Register/functions.php");

$user_data = check_login($connetion);

?>

<?php include_once 'Contact/submit.php';?>
<?php include_once 'navBar/navbar.php';?>



<!-- Status message -->
<?php if(!empty($statusMsg)){ ?>
    <div class="status-msg <?php echo $status; ?>"><?php echo $statusMsg; ?></div>
<?php } ?>

<!-- Form fields -->
<div class="form">
<form action="" method="post">
    <div class="form-input">
        <label for="name">Naam:</label><br>
        <input type="text" name="name" placeholder="Uw naam" value="<?php echo !empty($postData['name'])?$postData['name']:''; ?>"><br><br>
    </div>
    <div class="form-input">
        <label for="email">E-mail:</label><br>
        <input type="email" name="email" placeholder="Uw E-mail" value="<?php echo !empty($postData['email'])?$postData['email']:''; ?>"><br><br>
    </div>
    <div class="form-input">
        <label for="subject">Onderwerp:</label><br>
        <input type="text" name="subject" placeholder="Onderwerp van uw bericht" value="<?php echo !empty($postData['subject'])?$postData['subject']:''; ?>"><br><br>
    </div>
    <div class="form-input">
        <label for="message">Bericht:</label><br>
        <textarea class="textArea" name="message" placeholder="Type uw bericht hier"><?php echo !empty($postData['message'])?$postData['message']:''; ?></textarea>
    </div>
    <br>
    <input class="submit" type="submit" name="submit" class="btn" value="Verzenden">
</form>
</div>