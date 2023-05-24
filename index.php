<?php include 'db.php'; ?>
<?php include './navbar/navbar.php'; ?>

<?php
include_once 'db.php';
$query15 = "SELECT * from `pagina` WHERE home_page = 1 AND pub = 1";
$query15_run = mysqli_query($connetion , $query15);
if (mysqli_num_rows($query15_run) > 0) {
    while ($row2 = mysqli_fetch_assoc($query15_run)) {
        ?>

        <div class="col-md-4">

            <div class="card">
                <img style="border-radius: 0%;" src="<?php echo $row2['foto']; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5><?php echo $row2['naam']; ?></h5>
                    <p><?php echo $row2['tekst']; ?>
                    </p>
                    <a href="villa.php?naam=<?php echo $row2['naam']; ?>" style="background:#FF6562;border-color:#FF6562;border-radius:25px;padding:10px 50px;" class="btn btn-primary"><?php echo $row2['knoptekst']; ?></a>
                </div>
            </div>


        </div>
        <?php
    }
}
?>