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
			echo "Please enter some valid information!";
		}
	}
?>


<?php include_once 'navBar/navbar.php'; ?>

<?php if(!empty($statusMsg)){ ?>
	<div class="status-msg <?php echo $status; ?>"><?php echo $statusMsg; ?></div>
<?php } ?>
<link rel="stylesheet" href="Contact/contact.css">
<div class="form">
	<form action="" method="post">
		<div class="form-input">
			<label for="name">Naam:</label><br>
			<input type="text" name="user_name" placeholder="Uw naam" value="<?php echo !empty($postData['user_name'])?$postData['user_name']:''; ?>"><br><br>
		</div>
		<div class="form-input">
			<label for="email">Wachtwoord:</label><br>
			<input type="password" name="password" placeholder="Uw wachtwoord" value="<?php echo !empty($postData['password'])?$postData['password']:''; ?>"><br><br>
		</div>
		<div class="form-input">
			<label for="email">E-mail:</label><br>
			<input type="email" name="email" placeholder="Uw E-mail" value="<?php echo !empty($postData['password'])?$postData['email']:''; ?>"><br><br>
		</div>
		<br>
		<input class="submit" type="submit" name="submit" class="btn" value="Verzenden">
	</form>
</div>