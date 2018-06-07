<?php
	session_start();
	if (isset($_SESSION['user_id'])) {
		header("Location:index.php");
	}
	require "database.php";


	$message="";

	if (!empty($_POST["email"]) && !empty($_POST["password"]) && !empty($_POST["user"])) {
		//enter the new user to the db, use : to prevent sql injection
		$sql= "INSERT INTO utilizatori (email,user, password) VALUES (:email, :user, :password)";
		$stmt= $conn->prepare($sql);
		//insert values to db

		$stmt->bindParam(':email',$_POST['email']);
		$stmt->bindParam(':user',$_POST['user']);
		$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
		$stmt->bindParam(':password', $password);
		
		//verify if we have an error
		if( $stmt->execute() ){
			$message = "Noul cont este online";
		}
		else
		{
			$message = "Imi pare rau, nu am putut crea acest cont!";
		}
	}
	
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Grafuri Orientate </title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/registerStyle.css">

	<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
</head>
<body>
	<header>
		<ul class="nav justify-content-center">
		  	<li class="nav-item">
		    	<a class="nav-link" href="index.php"><i class="fas fa-home"></i></a>
		  	</li>	  	
		</ul>
	</header>
	

	<?php if(!empty($message)){ ?>		
			<p><?= $message ?>, acum trebuie sa te <a href="login.php">Autentifici</a></p>
	<?php } ?>		

	<div id="particles-js" class="particles-js">
		<div class="content">
			<h1>Inregistrare</h1>
			<span>sau <br><a href="login.php">Autentificare</a></span>

			<form action="register.php" method="post">
				<input type="text" name="email" placeholder="email-ul tau" required>
				<input type="text" name="user" placeholder="nume utilizator" required>
				<input type="password" name="password" placeholder="parola" required>
				<input type="password" name="confirm_password" placeholder="repeta parola" required><br>
				<input type="submit" name="submit" value="OK" class="registerButton">	
			</form>
		</div>
	</div>	

	<script src="JS/particles.js"></script>
	<script src="JS/app.js"></script>
</body>
</html>