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

<?php
session_start();

	include("db.php");
	include("Login-Register/functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST") {
        //something was posted
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        $query2 = "SELECT * FROM gebruikers WHERE name = '$user_name' OR email = '$email'";
        $result2 = mysqli_query($connetion, $query2);
        if (mysqli_num_rows($result2) > 0) {
            $status = "Oops";
            $statusMsg = "Username of email bestaat al!";
        } else {

            if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {

                //save to database
                $user_id = random_num(20);

                $bestaat = true;
                while ($bestaat) {
                    $code = random_num(11);
                    $sql4 = "SELECT code FROM gebruikers";
                    $result2 = $connetion->query($sql4);
                    $row2 = $result2->fetch_assoc();
                    $checkCode = $row2['code'];
                    if ($checkCode != $code) {
                        $bestaat = false;
                    } else{
                        $bestaat = true;
                    }
                }
                $query = "insert into gebruikers (name,email,wachtwoord,code) values ('$user_name','$email','$password','$code')";
                mysqli_query($connetion, $query);

                $postData = $statusMsg = $valErr = '';
                $status = 'error';

                $postData = $_POST;

                if (empty($valErr)) {
                    // maak de email
                    $subject3 = "Villa's 4 U account bevestiging!";
                    $htmlContent2 = " 
            <h2>Bevestiging account code</h2> 
            <img id='img' src='https://cdn.discordapp.com/attachments/405360752602644480/1111195741315153950/logovilla4u-mail.png'>
            <p>beste " . $user_name . ",</p> 
            <a href='https://villa4u.lukaverzijl.nl/ver.php?code=".$code."'>Klik hier om in te loggen!</a> ";


                    $headers = "MIME-Version: 1.0" . "\r\n";
                    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

                    $headers .= 'Van: Villa4U <' . $email . '>' . "\r\n";
                    //User
                    @mail($email, $subject3, $htmlContent2, $headers);
                    header("Location: login.php");
                } else {
                    $status = "Oops";
                    $statusMsg = "Voer valide informatie in aub!";
                }
            }
        }
    }
?>


<?php include_once 'navBar/navbar.php'; ?>

<div class="row d-flex justify-content-center">
    <div class="col-md-6 rounded-3 border shadow-5" style="margin-top: 150px; width: 600px;">

    <h1 class="text-center mb-6 mt-4">Register</h1>
        <?php if(!empty($statusMsg)){ ?>
            <div class="status-msg <?php echo $status; ?>"><?php echo $statusMsg; ?></div>
        <?php } ?>

        <form action="" method="post" class="needs-validation" novalidate>
		<div class="form-outline mb-4">
            <input type="text" id="username" class="form-control" name="user_name" required />
            <label class="form-label" for="username">Username</label>
            <div class="invalid-feedback">Voer een username in.</div>

        </div>
		<div class="form-outline mb-4">
            <input class="form-control" id="email" type="email" name="email" required />
            <label for="email" class="form-label">Email</label>
            <div class="invalid-feedback">Voer een email in.</div>


        </div>
		<div class="form-outline">
            <input type="password" name="password" class="form-control" id="password" required  />
            <label class="form-label" for="password">Wachtwoord</label>
            <div class="invalid-feedback">Voer een wachtwoord in.</div>

        </div>
		<br>
		<input class="btn btn-primary btn-block mb-4" type="submit" name="submit" class="btn" value="Verzenden">
        <div class="text-center">
            <p>Heb je al een account? <a href="./login.php" style="color: black">Inloggen</a></p>

        </div>
	</form>
</div>
</div>

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