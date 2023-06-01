<?php include 'db.php'; ?>
<?php
session_start();

include("Login-Register/functions.php");

$user_data = check_login($connetion);

?>
<?php include_once 'admin/admin-functions.php'; ?>
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

<div class="panel2">
    <h1 class="header">Hoogste biedingen</h1>
    <div class="list">
        <table class="table">
            <tr>
                <th>Huis</th>
                <th>Bod</th>
            </tr>
            <tr>
                <?php

                if (mysqli_num_rows($sql2) > 0) {
                    //get the output of each row
                    while($i = mysqli_fetch_assoc($sql2)) {
                        //get id and name columns
                        echo "<tr> <td>".$i["Huis"]."</td> <td>".$i["BodPrijs"]."</td> <tr>";
                    }
                } else {
                    echo "No results";
                }
                ?>
            </tr>
        </table>
    </div>
</div>

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
