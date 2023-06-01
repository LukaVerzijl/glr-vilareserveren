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


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
        $email = $_POST['email'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into gebruikers (name,email,wachtwoord) values ('$user_name','$email','$password')";

			mysqli_query($connetion, $query);

			header("Location: login.php");
			die;
		}else
		{
            $status = "Oops";
            $statusMsg = "Please enter some valid information!";
		}
	}
?>


<?php include_once 'navBar/navbar.php'; ?>

<?php if(!empty($statusMsg)){ ?>
	<div class="status-msg <?php echo $status; ?>"><?php echo $statusMsg; ?></div>
<?php } ?>


<div class="row d-flex justify-content-center">
    <div class="col-md-6 rounded-3" style="margin-top: 150px; width: 300px;">

    <h1 class="text-center mb-6">Register</h1>
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