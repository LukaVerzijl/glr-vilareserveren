<?php include 'db.php'; ?>
<?php
session_start();

include("Login-Register/functions.php");

$user_data = check_login($connetion);

?>
<?php include './navBar/navbar.php'; ?>

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
            margin-bottom: 6vh;
        }
        .card {
            text-align: center;
            padding-bottom: 2vh;
            font-size: 27px;
            width: 35vh;
            height: auto;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            border-radius: 30px;
        }
        .card-img-top {
            width: 32vh;
            height: 200px;
            border-radius: 10px;=
        }
        .card-body {
            margin-top: 2vh;
            text-align: center;
            margin-left: 20px;
        }
        .col-md-4 {
            display: flex;
            justify-content: space-evenly;
        }
    </style>
</header>

<body>
<div class="text">
    <h1 class="text-title">Villa te Koop</h1>
    <p class="text-information">Lorem ipsum dolor sit amet. Qui incidunt assumenda aut consequuntur perferendis ad ipsam porro aut ipsam natus et beatae alias.</p>
</div>        <div class="col-md-4">



<?php
include_once 'db.php';
$query15 = "SELECT * from `pagina` WHERE home_page = 1 AND pub = 1";
$query15_run = mysqli_query($connetion , $query15);
if (mysqli_num_rows($query15_run) > 0) {
    while ($row2 = mysqli_fetch_assoc($query15_run)) {
        ?>

            <div class="card">
                <img style=" margin-top: 20px;" src="<?php echo $row2['foto']; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 style="font-size: 30px"><?php echo $row2['naam']; ?></h4>
                    <p style="font-size: 25px"><?php echo $row2['tekst']; ?>
                    </p>
                    <br>
                    <a href="villa.php?naam=<?php echo $row2['naam']; ?>" style="background:#104B5F;border-color:#FF6562;border-radius:15px;padding:10px" class="btn btn-primary"><?php echo $row2['knoptekst']; ?></a>
                </div>
            </div>


        <?php
    }
}
?>
</div>

</body>
<?php include 'footer.php'; ?>
