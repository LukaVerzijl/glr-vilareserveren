<?php include 'db.php'; ?>
<?php
session_start();

include("Login-Register/functions.php");

$user_data = check_login($connetion);
$checkData = is_null($user_data);

if($checkData == 1) {
    die;
} else if($user_data['lvl'] < 2 || $user_data['lvl'] > 2)
{
    die;
}

?>
<?php include_once 'admin/admin-functions.php'; ?>
<?php include_once 'navBar/navbar.php';?>
<link rel="stylesheet" href="admin/admin.css">


<?php if(!empty($statusMsg)){ ?>
    <div class="status-msg <?php echo $status; ?>"><?php echo $statusMsg; ?></div>
<?php } ?>

<div class="panel5">
    <h1 class="header">Keur een bod goed</h1>
    <form method="post">
        <div class="form-input">
            <label for="name">Naam huis:</label><br>
            <input class="naam" type="text" name="huisName" placeholder="Naam van het huis"><br><br>
            <label for="name">Naam user:</label><br>
            <input class="naam" type="text" name="user_name" placeholder="Naam van de user"><br><br>
        </div>

        <input class="submit" type="submit" name="submit3" class="btn" value="Save">
    </form>
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

<div class="panel4">
    <h1 class="header">Haal een user van de admin lijst af</h1>
    <form method="post">
        <div class="form-input">
            <label for="name">Naam:</label><br>
            <input class="naam" type="text" name="user_name" placeholder="Naam van de user"><br><br>
        </div>

        <input class="submit" type="submit" name="submit2" class="btn" value="Save">
    </form>
</div>

<div class="panel2">
    <h1 class="header">Hoogste biedingen</h1>
    <div class="list">
        <table class="table">
            <tr>
                <th>Huis</th>
                <th>Bod</th>
                <th>Username</th>
            </tr>
            <tr>
                <?php
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tr> <td>".$row["Huis"]."</td> <td> €" . $row["BodPrijs"] ."</td> <td>".$row["Username"] ."</td> </tr>";
                    }
                } else {
                    echo "<tr> <td> Geen resultaat </td> <td>Geen resultaat</td> <td>Geen resultaat</td> </tr>";
                }
                ?>
            </tr>
        </table>
    </div>
</div>

<div class="panel3">
    <h1 class="header">Admins</h1>
    <div class="list2">
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Naam</th>
            </tr>
            <tr>
                <?php
                if ($result2->num_rows > 0) {
                    // output data of each row
                    while($row = $result2->fetch_assoc()) {
                        echo "<tr> <td>".$row["id"]."</td> <td>" . $row["name"] ."</td> </tr>";
                    }
                } else {
                    echo "<tr> <td> Geen resultaat </td> <td>Geen resultaat</td> </tr>";
                }
                ?>
            </tr>
        </table>
    </div>
</div>
