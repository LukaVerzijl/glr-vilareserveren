
<link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        rel="stylesheet"
/>
<!-- Google Fonts -->
<link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
        rel="stylesheet"
/>
<!-- MDB -->
<link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css"
        rel="stylesheet"
/>
<script
        type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"
></script>
<?php include 'db.php'; ?>

<?php
session_start();

include("Login-Register/functions.php");

$user_data = check_login($connetion);

?>
<?php
$naam=$_REQUEST['naam'];
$query = "SELECT * from pagina where naam='".$naam."' AND pub = 1";
$result = mysqli_query($connetion, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>

<?php if ($row['naam'] != '') {
    ?>
    <?php include './navBar/navbar.php'; ?>

<head>
    <style>

        .column {
            float: left;
            width: 50%;
        }

        .row1:after {
            content: "";
            display: table;
            clear: both;
        }
        .row1{
            margin-left: 30px;
        }
        *{
            overflow-x : hidden;
        }
        .carousel-control-next-icon{
            overflow: hidden;
        }
        .carousel-control-prev-icon{
            overflow: hidden;
        }


    </style>
</head>

    <body>

    <?php
    include_once 'db.php';
    $query3 = "SELECT * from `info` WHERE pagina_id = '".$row['id']."'";
    $query3_run = mysqli_query($connetion, $query3);
    if (mysqli_num_rows($query3_run) > 0) {
        while ($row5 = mysqli_fetch_assoc($query3_run)) {
            ?>

            <div id="carouselIndicators" class="carousel slide" data-mdb-ride="carousel">
                <div class="carousel-indicators">
                    <button
                            type="button"
                            data-mdb-target="#carouselIndicators"
                            data-mdb-slide-to="0"
                            class="active"
                            aria-current="true"
                            aria-label="Slide 1"
                    ></button>
                    <button
                            type="button"
                            data-mdb-target="#carouselIndicators"
                            data-mdb-slide-to="1"
                            aria-label="Slide 2"
                    ></button>
                    <button
                            type="button"
                            data-mdb-target="#carouselIndicators"
                            data-mdb-slide-to="2"
                            aria-label="Slide 3"
                    ></button>
                    <button
                            type="button"
                            data-mdb-target="#carouselIndicators"
                            data-mdb-slide-to="3"
                            aria-label="Slide 4"
                    ></button>
                </div>
                <div class="carousel-inner d-flex h-75 text-center align-items-center ">
                    <div class="carousel-item active">
                        <img src="<?php echo $row5['foto'] ?>" class="d-block w-100 img-fluid align-items-center" alt="foto1"/>
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo $row5['foto2'] ?>" class="d-block w-100 img-fluid align-items-center" alt="foto2"/>
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo $row5['foto3'] ?>" class="d-block w-100 img-fluid align-items-center" alt="foto3"/>
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo $row5['foto4'] ?>" class="d-block w-100 img-fluid align-items-center" alt="foto4"/>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-mdb-target="#carouselIndicators" data-mdb-slide="prev" >
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-mdb-target="#carouselIndicators" data-mdb-slide="next" >
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <?php } } ?>


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
    <div class="row1">
                        <div class="column">
                            <div class="col-md-2">
                            </div>
                            <div class="text">
                                <h1 class="header2 mb-5"><b><?php echo $row2['titel']; ?></b></h1>
                                <p><i class="fa-solid fa-bed"></i> <?php echo $row2['slaapkamers']; ?> Slaapkamers</p>
                                <p><i class="fa-solid fa-up-right-and-down-left-from-center"></i> <?php echo $row2['huisoppervlakte']; ?> m² woon oppervlakte</p>
                                <p><i class="fa-solid fa-up-down-left-right"></i> <?php echo $row2['totaaloppervlakte']; ?> m² totale oppervlakte</p>
                                <p class="header2"><?php echo $row2['tekst']; ?></p>
                            </div>

                        </div>
                    <?php
                }
                ?>



                <?php
            }
            ?>
            <br>

    <div class="column">
        <!--    Lijst met biedingen hieronder-->
        <div class="row2">
            <div class="">
                <h2 class="">Biedingen</h2>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Bod</th>
                        <th scope="col">Geboden door</th>
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
                                <td>€<?php echo $row3['BodPrijs']; ?></td>
                                <td><?php echo $row3['Username']; ?></td>
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
    </div>



    <?php
    include_once 'db.php';
    $query5 = "SELECT * from `info` WHERE pagina_id = '".$row['id']."'";
    $query5_run = mysqli_query($connetion, $query5);
    if (mysqli_num_rows($query5_run) > 0) {
        while ($row6 = mysqli_fetch_assoc($query5_run)) {
            ?>
    <div class="row1">
        <div class="column">
            <div class="location">
                <h2>Locatie</h2>
                <iframe src="<?php echo $row6['location']; ?>" width="90%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

        <?php }} ?>
            <?php
            $query17 = "SELECT MAX(BodPrijs) FROM `biedingen` WHERE Huis = '".$row['naam']."'";
            $query17_run = mysqli_query($connetion, $query17);
            while ($row4 = mysqli_fetch_assoc($query17_run)) {
                $minbod = $row4['MAX(BodPrijs)'];
                if ($minbod == NULL) {
                    $minbod = 1000000;
                } else{
                    $minbod = $minbod + 1000;
                }
                ?>

    <?php if (isset($user_data) && ($user_data!==null)) {
        ?>
                <div class="column">
                    <h2>Bieden</h2>
                    <p>Leuk dat je intresse heb in deze villa! Voer het formulier hieronder in om jou bod uit te brengen.</p>
                    <div>
                        <form action="" method="post" class="needs-validation" novalidate>
                            <div class="row">
                                <div class="col">
                                    <!-- Name input -->
                                    <div class="form-outline mb-4">
                                        <input type="text" id="naam" name="Voornaam" class="form-control" required />
                                        <label class="form-label" for="naam">Voornaam</label>
                                        <div class="invalid-feedback">Voer uw naam in.</div>
                                    </div>
                                </div>
                                <div class="col">
                                    <!-- Name input -->
                                    <div class="form-outline">
                                        <input type="text" id="achternaam" name="Achternaam" class="form-control" required/>
                                        <label class="form-label" for="achternaam">Achternaam</label>
                                        <div class="invalid-feedback">Voer een achternaam in.</div>

                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-outline mb-4">
                                        <input type="number" id="bod" max="10000000" name="bodPrijs" min="<?php echo $minbod ?>" class="form-control"  required/>
                                        <label class="form-label" for="bod">Het minimale bedrag is €<?php echo $minbod ?></label>
                                        <div class="invalid-feedback">Dit bod is niet geldig.</div>

                                    </div>
                                </div>
                            </div>
<!--                                <input type="hidden" name="gebruiker" value="admin">-->

                            <input type="hidden" name="huis" value="<?php echo $row['naam']; ?>">
                    <button type="submit" class="btn btn-primary btn-block"style="height: 100px; font-size: 30px; width: 100%;" name="submit">Bieden</button>
                </div>
                  </div>
                      <?php include 'footer.php'; ?>

                <?php
           } else{
       ?>
                    <div class="column">

                        <h2>Bieden</h2>
                        <p>Leuk dat je intresse heb in deze villa! Je kan alleen bieden als je ingelogd bent. Klik hieronder om in te loggen </p>
                        <div class="row">

                            <div class="col">
                                <!-- Name input -->
                                <div class="form-outline mb-4">
                                    <input type="text" id="naam" name="Voornaam" class="form-control" disabled />
                                    <label class="form-label" for="naam">Voornaam</label>
                                    <div class="invalid-feedback">Voer uw naam in.</div>
                                </div>
                            </div>
                            <div class="col">
                                <!-- Name input -->
                                <div class="form-outline">
                                    <input type="text" id="achternaam" name="Achternaam" class="form-control" disabled/>
                                    <label class="form-label" for="achternaam">Achternaam</label>
                                    <div class="invalid-feedback">Voer een achternaam in.</div>

                                </div>

                            </div>
                        </div>
                        <div class="row" style="overflow: hidden;">
                            <div class="col">
                                <div class="form-outline mb-4">
                                    <input type="number" id="bod" name="bodPrijs" min="<?php echo $minbod ?>" class="form-control"  disabled/>
                                    <label class="form-label" for="bod">Het minimale bedrag is €<?php echo $minbod ?></label>
                                    <div class="invalid-feedback">Dit bod is niet geldig.</div>

                                </div>
                                <button class="btn btn-primary btn-block  " style="height: 100px; font-size: 30px; width: 100%; " onclick="location.href = 'login.php'">Login</button>

                            </div>
                        </div>
                    </div>
                    <?php }}
            ?>
    </div>





<?php include 'footer.php'; ?>


    </body>

    </html>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.form-outline').forEach((formOutline) => {
                new mdb.Input(formOutline).init();
            });

            document.querySelectorAll('.form-outline').forEach((formOutline) => {
                new mdb.Input(formOutline).update();
            });
        });

        (() => {
            'use strict';

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation');

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms).forEach((form) => {
                form.addEventListener('submit', (event) => {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        })();
    </script>
    <?php
} else {
    ?>
        <?php include '404.php'; ?>

    <?php
}
?>