

<?php include 'db.php'; ?>
<?php include './navBar/navbar.php'; ?>


<?php
$naam=$_REQUEST['naam'];
$query = "SELECT * from pagina where naam='".$naam."' AND pub = 1";
$result = mysqli_query($connetion, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>

<?php if ($row['naam'] != '') {
    ?>

<head>
    <style>

    </style>
</head>

<body>
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
    <?php include_once 'biedingen.php'; ?>

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

    <div class="container-biedingen">
        <!--    Lijst met biedingen hieronder-->
        <div class="row">
            <div class="col-md-12">
                <h1 class="header2">Biedingen</h1>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Bod</th>
                        <th scope="col">Gebruikersnaam</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $query16 = "SELECT * from `biedingen` WHERE Huis = '".$row['naam']."' ORDER BY BodPrijs DESC LIMIT 5";
                    $query16_run = mysqli_query($connetion, $query16);
                    if (mysqli_num_rows($query16_run) > 0) {
                        while ($row3 = mysqli_fetch_assoc($query16_run)) {
                            ?>
                            <tr>
                                <td><?php echo $row3['BodPrijs']; ?></td>
                                <td><?php echo $row3['UserName']; ?></td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php
    $query17 = "SELECT MAX(BodPrijs) FROM `biedingen` WHERE Huis = '".$row['naam']."'";
    $query17_run = mysqli_query($connetion, $query17);
    while ($row4 = mysqli_fetch_assoc($query17_run)) {
        $minbod = $row4['MAX(BodPrijs)'];
        if ($minbod == NULL) {
            $minbod = 1000000;
        } else{
            $minbod = $minbod + 10000;
        }
        ?>
        <div class="bideningen-form-container">
            <div>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Bieden</label><br><br>
                        <label id="info-bieden" class="form-text text-muted">Bieden kan vanaf <?php echo $minbod ?> euro</label><br>

                        <input type="number" min="<?php echo $minbod    ?>" class="form-field" name="bodPrijs" required>
                        <input type="hidden" name="gebruiker" value="test">
                    </div>
                    <input type="hidden" name="huis" value="<?php echo $row['naam']; ?>">
                    <button type="submit" class="submit" name="submit">Bieden</button>
            </div>
        </div>
            <?php
    }
    ?>




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