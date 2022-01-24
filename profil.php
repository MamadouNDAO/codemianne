<?php
	session_start();
	require("fonctions/traitement.php");
	if(isset($_POST['submit'])){
		$photo = null;
		if(isset($_FILES['avatar']) AND !empty($_FILES['avatar']['name'])){
			$photo = $_SESSION['id_user'].strtolower($_FILES['avatar']['name']);
			$chemin = "./Image/profil/".$photo;
			unlink("./Image/profil/".$_SESSION['photo']);
			move_uploaded_file($_FILES['avatar']['tmp_name'], $chemin);
		}else{
			$photo = $_SESSION['photo'];
		}
		
		modifiProfil($_POST['prenom'], $_POST['nom'], $_POST['email'], $_SESSION['id_user'], $photo);
		
		$user = getProfil($_SESSION['id_user']);
		$_SESSION['prenom'] = $user['prenom'];
		$_SESSION['nom'] = $user['nom'];
		$_SESSION['email'] = $user['email'];
		$_SESSION['id_user'] = $user['id'];
		$_SESSION['photo'] = $user['photo'];
		header("Refresh:0; url=index.php?lien=profil");
		echo "<script type='text/javascript'>alert('Profil modifié avec succès!');</script>";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		


		.right-side {
			width: 50%;
			padding: 15px;
			//border: 1px solid black;
			float: right;
			height: 350px;
			
		}
		label {
			//width: 30%;
			display: inline-block;
			font-weight: 400;
		}
		input, textarea {
			width: 60%;
		}

		textarea {
			height: 100px;
		}

		.form-control {
			//height: 50px;
			//margin: 5px;
		}

		
		.left-side {
			float: left;
			width: 40%;
			padding: 10px 5px;
			margin: 2px;
			
		}
		.content {
			padding: 30px;
			position: relative;
			height: 400px;
		}
		.logo {
			
			border: 1px solid black;
			width: 40px;
			height: 40px;
		}
		.anne{
			float: right;
			border-radius: 50%;
			border: 2px solid black;
			width: 200px;
			height: 200px;
		}
	</style>
</head>
<body>
	

	<div class="content">
		<div class="left-side" >
			<img class="anne" src="./Image/profil/<?= $_SESSION['photo'] ?>" >
		</div>

		<div class="right-side card">
			<div style="position: relative; height: 20px; margin-bottom: 25px;">
				<button class="btn btn-secondary" style="float: right;" type="submit">
					<a style="color: #fff;" href="index.php?lien=produit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16">
						<path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/>
						</svg>Retour
					</a>
				</button>
			</div>

			<div >
				<form action="#" method="post" style="height: 250px;" enctype="multipart/form-data">
					<div  class="mb-3 row">
						<label class="col-sm-3 col-form-label" for="prenom">Votre prénom :</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" name="prenom" id="prenom" value="<?= $_SESSION['prenom'] ?>" placeholder="Nom">
						</div>
					</div>

					<div class="mb-3 row">
						<label class="col-sm-3 col-form-label" for="nom">Votre nom :</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" name="nom" id="nom" value="<?= $_SESSION['nom'] ?>" placeholder="Email">
						</div>
					</div>

					<div class="mb-3 row">
						<label class="col-sm-3 col-form-label" for="email">Votre Email :</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="email" id="prenom" value="<?= $_SESSION['email'] ?>" placeholder="Email">
						</div>
					</div>

					<div class="mb-3 row">
						<label class="col-sm-3 col-form-label" for="avatar">Photo profil:</label>
						<div class="col-sm-9">
							<input type="file" class="form-control" name="avatar" id="prenom" value="<?= $_SESSION['photo'] ?>">
						</div>
					</div>

					<div align="middle">
						<button style="width: 150px;" type="submit" name="submit" class="btn btn-primary">Enregistrer</button>
					</div>
					
				</form>		
		
			</div>
		</div>	
		
	</div>
</body>
</html>