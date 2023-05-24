

<?php include 'db.php'; ?>
<?php //include './navBar/navbar.php'; ?>


<?php
$naam=$_REQUEST['naam'];
$query = "SELECT * from pagina where naam='".$naam."' AND pub = 1";
$result = mysqli_query($connetion, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>

<?php if ($row['naam'] != '') {
    ?>



    <div class="banner">

    </div>

    <br><br><br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <h3 class="header2"><b><?php echo $row['naam']; ?></b></h3>
                <p class="header2"><?php echo $row['tekst']; ?></p>
            </div>
            <div class="col-md-2">
            </div>
        </div>
    </div>


    <br />
    <br />
    <br />

    <?php
    include_once 'db.php';
    $query15 = "SELECT * from `info` WHERE pagina_id = '".$row['id']."'";
    $query15_run = mysqli_query($connetion, $query15);
    if (mysqli_num_rows($query15_run) > 0) {
        while ($row2 = mysqli_fetch_assoc($query15_run)) {
            ?>

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-4">
                                <h3 class="header2"><b><?php echo $row2['titel']; ?></b></h3>
                                <p class="header2"><?php echo $row2['tekst']; ?></p>
                            </div>
                            <div class="col-md-4">
                                <img src="<?php echo $row2['foto']; ?>" style="box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;width:100%;height:auto;">



                            </div>
                            <div class="col-md-2">
                            </div>
                        </div>
                    </div>

                    <?php
                }
                ?>



                <?php
            }
            ?>
            <br>


<!--    --><?php //include 'footer.php'; ?>


    </body>
    </html>

    <?php
} else {
    ?>
        <?php include '404.php'; ?>

    <?php
}
?>