<?php include 'db.php'; ?>
<?php
session_start();

include("Login-Register/functions.php");

$user_data = check_login($connetion);

?>
<?php include 'navbar/navbar.php'; ?>
<link rel="stylesheet" href="admin/admin.css">

<?php if(!empty($statusMsg)){ ?>
    <div class="status-msg <?php echo $status; ?>"><?php echo $statusMsg; ?></div>
<?php } ?>

<div class="panel1">
    <h1 class="header">Geef een user admin rechten</h1>
    <form method="post">
        <div class="form-input">
            <label for="name">Naam:</label><br>
            <input class="naam" type="text" name="user_name" placeholder="Naam van de user"><br><br>
        </div>

        <input class="submit" type="submit" name="submit" class="btn" value="Save">
    </form>
</div>
