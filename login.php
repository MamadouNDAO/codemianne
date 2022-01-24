<?php
	session_start();
	require("fonctions/traitement.php");
	if(isset($_POST['submit'])){
		$password = $_POST['password'];
		$login = $_POST['email'];
        $user = connexion($login, $password);
        if ($user)
        {
			$passwordHash = $user['password'];
			if(password_verify($password, $passwordHash)){
				$_SESSION['prenom'] = $user['prenom'];
				$_SESSION['nom'] = $user['nom'];
				$_SESSION['email'] = $user['email'];
				$_SESSION['id_user'] = $user['id'];
				$_SESSION['photo'] = $user['photo'];
				header('Location: index.php?lien=profil');
			}else{
				echo "<script type='text/javascript'>alert('Login ou mot de passe incorect');</script>";
			}
			
        } else {
            echo "<script type='text/javascript'>alert('Login ou mot de passe incorect');</script>";
        }
    }

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="">
	<title></title>
	<style>
		.container {
			border: 2px solid #4895ef;
			width: 30%;
			margin: 0px auto;
			text-align: center;
			background: #4895ef;
			border-radius: 10px;
			padding: 15px;
			color: #fff;
		}

		.logo {
			width: 100px;
			height: 100px;
			border-radius:50%;
			border: solid 2px #fff;
			margin: 4px auto;
		}

		.input-text {
			border: none;
			width: 70%;
			padding: 10px;
			border-radius: 5px;
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
		.checkbox {
			width: 70%;
			margin: 0px auto;
		}
		.checkbox > span {
			font-size: 12px;
		}
		.button {
			/*width: 70%;*/
		}
		.divider {
			width: 50%;
			margin: 5px auto;
			border-top: 1px solid black;
			border-bottom: 1px solid black;
			height: 1px;
			background-color: black;
		}
		.footer {
			font-size: 10px;
			position: relative;
			height: 20px;
			/*height: 100px;*/
		}

		.float-right {
			position: absolute;
			right: 0px;
		}

		.float-left {
			position: absolute;
			left: 0px;
		}

		.my-block{
			margin: 15px;
		}
	</style>
  
</head>
<body>
	<h1 align="CENTER">Connexion</h1>

	<div class="container">
		<div>
			<img class="logo" src="./Image/logo.jpg">
		</div>
		<form action="#" method="post">
			<div class="body">
				
				<div class="my-block">
					<img class="login" src="./Image/login.png" >
					<input class="input-text" placeholder="Votre email" name="email" type="email">
				</div>

				<div class="my-block">
					<img class="cle" src="./Image/cle.png">
					<input class="input-text" type="password" name="password" placeholder="Votre mot de passe">
				</div>
				<div align="left" class="checkbox">
					<input type="checkbox" name="">
					<span>Connexion Permanente</span></p>
				<div align="CENTER">

				<div class="button">
					<button class="btn btn-warning" type="submit" name="submit" >Connexion</button>
				</div>
			</div>
		</form>
		<p class="divider"></p>

		<div class="footer">
			<a class="float-left" href="index.php?lien=password">Mot de pass oublié</a>
			<a class="float-right" href="index.php?lien=inscription">Créer un compte</a>
		</div>
	</div>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>