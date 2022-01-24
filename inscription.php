<?php
	require("fonctions/traitement.php");
	if(isset($_POST['submit'])){
		$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
		$photo = rand(1, 200).strtolower($_FILES['avatar']['name']);
		$chemin = "./Image/profil/".$photo;
		ajoutUser($_POST['prenom'], $_POST['nom'], $_POST['email'], $password, $photo);
		move_uploaded_file($_FILES['avatar']['tmp_name'], $chemin);
		echo "<script type='text/javascript'>alert('Utilisateur ajouté avec succès!');</script>";
		header('Location: index.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="">
	<title></title>
	<style>
		.container {
			border: 2px solid #4895ef;
			width: 30%;
			margin: 50px auto;
			text-align: center;
			background: #4895ef;
			border-radius: 10px;
			padding: 15px;
			color: #fff;
		}
		.input-text {
			width: 70%;
			padding: 10px;
			border-radius: 5px;
			border: none;
		}
		.input-text:focus{
			outline: none;
		}
        .login{
        	width: 20px;
        	transform: translate(0px, 4px);
        	/*height: 40px;*/
		}
		.cle{
			width: 20px;
			transform: translate(0px, 4px);
		}
		.m-1 {
			margin: 20px;
		}
		
		.float-right {
			position: absolute;
			right: 0px;
		}

		.float-left {
			position: absolute;
			left: 0px;
			}
			.tetee{
        	width: 20px;
        	transform: translate(0px, 4px);
		}
		.my-block{
			margin: 15px;
		}
	</style>
  
</head>
<body>
	
	<div class="container">
		<h1 align="CENTER">Inscription</h1>
		<div class="body">
			<form action="#" method="post" enctype="multipart/form-data">
				<div class=" my-block">
					<img class="tetee" src="./Image/tetee.png" >
				<input class="input-text" value="nom" name="nom" type="text">
				</div>
				<div class="my-block">
					<img class="tetee" src="./Image/tetee.png">
					<input class="input-text" type="text" name="prenom" value="prenom">
				</div>
				<div class="my-block">
					<img class="login" src="./Image/login.png" >
					<input class="input-text" value="email" name="email" type="email">
				</div>

				<div class="my-block">
					<img class="cle" src="./Image/cle.png">
					<input class="input-text" type="password" name="password">
				</div>

				<div class="my-block">
					<!--<img class="cle" src="./Image/tetee.png">-->
					<label for="avatar">Photo</label>
					<input class="input-text" type="file" name="avatar">
				</div>

				<div class="button">
					<button class="btn btn-danger" type="submit"><a style="color: #fff" href="index.php">Retour</a></button>
					<button class="btn btn-success" name="submit" type="submit">Inscription</button>
				</div>
			</form>
		</div>

		<p class="divider"></p>
	</div>

</head>
<body>

</body>
</html>