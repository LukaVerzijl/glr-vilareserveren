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

<?php include_once 'Contact/submit.php';?>
<?php include_once 'navBar/navbar.php';?>


<body>
<!-- Status message -->
<?php if(!empty($statusMsg)){ ?>
    <div class="status-msg <?php echo $status; ?>"><?php echo $statusMsg; ?></div>
<?php } ?>

<!-- Form fields -->
<div class="row d-flex justify-content-center "  >
    <div class="col-md-6 rounded-3 border shadow-5" style="margin-top: 150px; width: 600px;">
        <h1 class="text-center mt-4 mb-6">Contact opnemen</h1>
        <form action="" method="post" class="needs-validation" novalidate>
            <div class="form-outline mb-4">
                <input type="text" name="name" id="naam" class="form-control" />
                <label class="form-label" for="naam">Naam</label>
                <div class="invalid-feedback">Voer uw naam in.</div>
            </div>
            <div class="form-outline mb-4">
                <input type="email" name="email" class="form-control" id="email" />
                <label for="email" class="form-label">E-mail</label>
                <div class="invalid-feedback">Voer uw email in.</div>

            </div>
            <div class="form-outline mb-4">
                <input type="text" name="subject" class="form-control" id="subject" />
                <label for="subject" class="form-label">Onderwerp</label>
                <div class="invalid-feedback">Voer een onderwerp in.</div>

            </div>
            <div class="form-outline">
                <textarea class="form-control" rows="5" id="message" name="message"></textarea>
                <label for="message" class="form-label" >Bericht:</label>
                <div class="invalid-feedback">Geef uw bericht mee.</div>
            </div>
            <br>
            <button type="submit" name="submit" class="btn btn-primary btn-block mb-4">Insturen</button>
        </form>
    </div>
</div>
</body>
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
<style>
    *{
        overflow-x: hidden;
    }
</style>