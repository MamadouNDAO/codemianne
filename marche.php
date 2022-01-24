<?php
	require("fonctions/traitement.php");
	$produits = getProduit();
	if(isset($_POST['submited'])){
		$idP = $_POST['submited'];
		$singleP = getOneProduit($idP);
		echo "<div id='myModal' class='modal'>
				<!-- Modal content -->
				<div class='modal-content'>
					<span class='close'>&times;</span>
					<h3 style='text-align: center'>Détail produit</h3>
					<br>
					<div class='row'>
						<div class='col-4'>
							<img src='Image/".$singleP[0]->photo."' width='210' height='230'>
						</div>
						<div class='col-8'>
							<div  class='mb-3 row'>
								<h5 class='col-sm-4' >Nom produit :</h5>
								<div class='col-sm-8'>
									<span>".$singleP[0]->libelle."</span>
								</div>
							</div>
							<div  class='mb-3 row'>
								<h5 class='col-sm-4' >Description :</h5>
								<div class='col-sm-8'>
									<p>".$singleP[0]->description."</p>
								</div>
							</div>
							<div  class='mb-3 row'>
								<h5 class='col-sm-3' >Prix :</h5>
								<div class='col-sm-9'>
									<p>".$singleP[0]->prix." F CFA</p>
								</div>
							</div>
						</div>
						
					</div>
					<br>
					<div class='row'>
						<div class='col-9'>
						</div>
						<div class='col-3'>
						<button onclick='myAchat()' style='width: 80px' class='m-10 btn btn-primary'>Acheter</button>
						<button onclick='myClose()' style='width: 80px' class='m-10 btn btn-danger'>Annuler</button>
						</div>
					</div>
				</div>
			</div>

			<script type='text/javascript'>
			var modal = document.getElementById('myModal');
			modal.style.display = 'block';
			</script>
			";

	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<title></title>
<style>

/*#div1{
	background-color: white;
	margin-left: 35%;
	margin-top: 20px;
	width: 400px;
	float: right;
}*/



	</style>


</head>
<body>

	<!--<div class="container mb-15">
		<input type="submit" name="search">
			<cellspacing>
	</div>-->
	<section class="categories container" >

		<h1 class="heading"> Nos <span>produits </span> </h1>

		<div class="box-container">
		<?php foreach($produits as $produit): ?>
			<div class="box">
				<img src="Image/<?= $produit->photo ?>" alt="">
				<h3><?= $produit->libelle ?></h3>
				<p><?= $produit->description ?></p>
				<p><?= $produit->prix ?> F CFA</p>
				<form action="" method="POST">
					<button  class="btn btn-dark mb-10"  value="<?= $produit->id ?>" name="submited"  >Voir détail</button>
				</form>

			</div>
		<?php endforeach ?>

		</div>

	</section>


	


	<script>
		var modal = document.getElementById("myModal");
		var btn = document.getElementById("myBtn");
		var btn = document.getElementById("myClose");
		var span = document.getElementsByClassName("close")[0];
		function showMyModal(){
			var modal = document.getElementById("myModal");
			modal.style.display = "block";
		}
		span.onclick = function() {
		modal.style.display = "none";
		}

		function myClose(){
			modal.style.display = "none";
		}

		function myAchat(){
			modal.style.display = "none";
			alert('Achat fait avec succès!')
		}

		window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
		}
	</script>
</body>
</html>