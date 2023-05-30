
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

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['wachtwoord'] === $password)
					{

						$_SESSION['id'] = $user_data['id'];
						header("Location: index.php");
						die;
					}
				}
			}
			$status = "Oops";
			$statusMsg = "wrong username or password!";
		}else
		{
			$status = "Oops";
			$statusMsg = "wrong username or password!";
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
		<br>
		<input class="submit" type="submit" name="submit" class="btn" value="Verzenden">
	</form>
</div>