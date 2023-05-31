<?php include 'db.php'; ?>
<?php
session_start();

include("Login-Register/functions.php");

$user_data = check_login($connetion);

?>
<?php include 'navbar/navbar.php'; ?>

<header>
    <style>
        .text {
            text-align: center;
            margin-top: 8vh;
        }
        .text-title {
            font-size: 50px;
        }
        .text-information {
            margin-top: 3vh;
            font-size: 25px;
        }
        .card {
            text-align: center;
            margin: 0px 10px 30px 20px;
        }
        .card-img-top {
            width: 32vh;
            height: 200px;
        }
        .card-body {
            font-size: 30px;
            margin-top: 2vh;
        }
    </style>
</header>

<body>
<?php
include_once 'db.php';
$query15 = "SELECT * from `pagina` WHERE home_page = 1 AND pub = 1";
$query15_run = mysqli_query($connetion , $query15);
if (mysqli_num_rows($query15_run) > 0) {
    while ($row2 = mysqli_fetch_assoc($query15_run)) {
        ?>

        <div class="col-md-4">

            <div class="text">
                <h1 class="text-title">Villa te Koop</h1>
                <p class="text-information">Lorem ipsum dolor sit amet. Qui incidunt assumenda aut consequuntur perferendis ad ipsam porro aut ipsam natus et beatae alias.</p>
            </div>

            <div class="card">
                <img style="border-radius: 0%;" src="<?php echo $row2['foto']; ?>" class="justify-content-center" alt="..." style="width: 32vh; height: 200px;">
                <div class="card-body">
                    <h5><?php echo $row2['naam']; ?></h5>
                    <p><?php echo $row2['tekst']; ?>
                    </p>
                    <br>
                    <a href="villa.php?naam=<?php echo $row2['naam']; ?>" style="background:#FF6562;border-color:#FF6562;border-radius:25px;padding:10px 50px;" class="btn btn-primary"><?php echo $row2['knoptekst']; ?></a>
                </div>
            </div>

        </div>
        <?php
    }
}
?>
</body>
