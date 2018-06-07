<?php
	session_start();
	if (isset($_SESSION['user_id'])) {
		header("Location:index.php");
	}

	require "database.php";

	if (!empty($_POST["user"]) && !empty($_POST["password"])) {
		
		$records = $conn->prepare('SELECT id,email,password FROM utilizatori WHERE user=:user ');
		$records->bindParam(':user', $_POST['user']);
		$records->execute();
		$results = $records->fetch(PDO::FETCH_ASSOC);

		$message="";
		if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
			$_SESSION['user_id'] = $results['id'];
			header("Location: index.php");
		}
		else
		{
			$message="Email-ul/parola nu exista";
		}
	}
	
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Grafuri Orientate</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/loginStyle.css">

	<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
</head>
<body>

	<!-- <div class="header">
		<a href="index.php"></a>
	</div> -->
	<ul class="nav justify-content-center">
		  	<li class="nav-item">
		    	<a class="nav-link" href="index.php"><i class="fas fa-home"></i></a>
		  	</li>	  	
	</ul>

	<?php if(!empty($message)){ ?>		
			<p><?= $message ?></p>
	<?php } ?>	

	<div id="particles-js" class="particles-js">
		<div class="content">
			<h1>Autentificare</h1>
			<span>nu ai cont? <br><a href="register.php" class="registerLink">Inregistrare</a></span>

			<form action="login.php" method="post">
				<input type="text" name="user" placeholder="nume utilizator" required autocomplete="false">
				<input type="password" name="password" placeholder="parola" required><br>
				<input type="submit" name="submit" value="OK" class="logButton">
			</form>
		</div>
	</div>

	<script src="JS/particles.js"></script>
	<script src="JS/app.js"></script>
</body>
</html>