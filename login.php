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

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from gebruikers where name = '$user_name' limit 1";
			$result = mysqli_query($connetion, $query);
            $user_data = mysqli_fetch_assoc($result);

			if($user_data)
			{
				if($result && mysqli_num_rows($result) > 0)
				{


					if(password_verify($password,$user_data['wachtwoord']) && $user_data['geactiveerd'])
					{

						$_SESSION['id'] = $user_data['id'];
						header("Location: index.php");
						die;
					} else{
                        $status = "Oops";
                        $statusMsg = "Verkeerd wachtwoord of username!";
                        header("Location: login.php");

                    }
				}
			}
			$status = "Oops";
			$statusMsg = "Verkeerd wachtwoord of username!";
		}else
		{
			$status = "Oops";
			$statusMsg = "Verkeerd wachtwoord of username!";
		}
	}

?>
<?php include_once 'navBar/navbar.php'; ?>



<body>
<div class="row d-flex justify-content-center"  >
    <div class="col-md-6 rounded-3 border shadow-5" style="margin-top: 150px; width: 600px;">
     <h1 class="text-center mt-4 mb-6">Login</h1>
        <?php if(!empty($statusMsg)){ ?>
            <div class="status-msg <?php echo $status; ?>"><?php echo $statusMsg; ?></div>
        <?php } ?>
    <form action="" method="post" class="needs-validation" novalidate>
        <div class="form-outline mb-4">
            <input type="text" id="username" name="user_name" class="form-control" required />
            <label class="form-label" for="username">Username</label>
            <div class="invalid-feedback">Voer een username in.</div>
        </div>
        <div class="form-outline">
            <input type="password" name="password" id="typePassword" class="form-control" required />
            <label class="form-label" for="typePassword">Wachtwoord</label>
            <div class="invalid-feedback">Voer een wachtwoord in.</div>

        </div>
		<br>
        <button type="submit" name="submit" class="btn btn-primary btn-block mb-4">Insturen</button>
        <div class="text-center">
            <p>Nog geen account? <a href="./signup.php" style="color: black">Registreren</a></p>

        </div>

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