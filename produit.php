<?php
	require("fonctions/traitement.php");
	$produits = getProduit();
	if(isset($_POST['submit'])){
		$photo = rand(10, 500).strtolower($_FILES['image']['name']);
		$chemin = "./Image/".$photo;
		move_uploaded_file($_FILES['image']['tmp_name'], $chemin);
		ajoutProduit($_POST['nom'], $_POST['prix'], $_POST['description'], $photo);
		$produits = getProduit();
		header("Refresh:0; url=index.php?lien=produit");
	}

	if(isset($_POST['subDelete'])){
		echo "<script type='text/javascript'>alert('Suppression du produit!!')</script>";
		$onP = getOneProduit($_POST['subDelete']);
		unlink("./Image/".$onP[0]->photo);
		supprimerProduit($_POST['subDelete']);
		header("Refresh:0; url=index.php?lien=produit");
	}
?>

<style>
	.ligne td{
    border: solid 1px #333;
	text-align: center;
}
</style>
<div class="content">
	<div align="right" style="width: 100%; margin: 15px;">
		<td colspan="12">
			<button type="submit" >
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
					<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
				</svg> 
				<input align="right"  style="float: right;" type="text" placeholder="Search..">
			</button>
		</td>
	</div>


			<div class="container">
				<table border=1 width="950px" height="400px" align="CENTER">
					<thead style="background: #333; color: #fff; padding: 20px;"> 	
					    <tr class="ligne">
							<td >Image</td>
					    	<td colspan="14">Nom Produit<i class='bx bx-caret-up'></i></td>
					     	<td>Prix<i class='bx bx-caret-up'></i><i class='bx bx-caret-down'></i></td>
					     	<td colspan="2">Informations additionnelles</td>
					     	<td>Action</td>
					    </tr>						
					</thead>
					<tbody style="padding: 15px;">
					<?php foreach($produits as $produit): ?>
					    <tr class="ligne">
							<td ><img src="Image/<?= $produit->photo ?>" width="50" height="50" alt="" srcset=""></td>
					    	<td colspan="14"><?= $produit->libelle ?> </td>
					     	<td><?= $produit->prix ?></td>
					     	<td colspan="2"><?= $produit->description ?></td>
					     	<td>
								<div class="row">
									<div class="col-6">
										<form action="" method="post">

											<i style="margin-left:10px; color: orange; cursor:pointer;" class="uil uil-pen"></i>
										</form>
									</div>
									<div class="col-6">
										<form action="" method="post">
											<button style="background:none; border: none" type="submit" name="subDelete" value="<?= $produit->id ?>">
												<i style="margin-left:10px; color: red; cursor:pointer;" class="uil uil-trash-alt"></i>
											</button>
										</form>
									</div>
								</div>
							</td>
					    </tr>
					<?php endforeach ?>
					    
					    <tr align="CENTER">
							<div class="footer">
								<td colspan="18"><button onclick="showMymodal()" class="btn btn-primary" type="submit"><i class='bx bxs-message-square-add'>Ajouter nouveaux produits</i></button></td>
							</div>
						</tr>
					</tbody>
				</table>

			</div>
			</div>

<!-- Modal -->

<div id="myModal" class="modal">
	<!-- Modal content -->
	<div class="modal-content">
		<span class="close">&times;</span>
		<h3 style="text-align: center; color: #4361ee">Formulaire d'ajout d'un nouveau produit</h3>
		<br>
		<form action="" method="post" enctype="multipart/form-data">
			<div  class="mb-3 row">
				<label class="col-sm-3 col-form-label" for="nom">Nom produit :</label>
				<div class="col-sm-9">
					<input class="form-control" type="text" name="nom" placeholder="Nom produit">
				</div>
			</div>

			<div  class="mb-3 row">
				<label class="col-sm-3 col-form-label" for="description">Description :</label>
				<div class="col-sm-9">
					<input class="form-control" type="text" name="description" placeholder="Description">
				</div>
			</div>

			<div  class="mb-3 row">
				<label class="col-sm-3 col-form-label" for="prix">Prix :</label>
				<div class="col-sm-9">
					<input class="form-control" type="number" name="prix"  placeholder="prix">
				</div>
			</div>
			<div  class="mb-3 row">
				<label class="col-sm-3 col-form-label" for="prenom">Photo produit:</label>
				<div class="col-sm-9">
					<input class="form-control" type="file" name="image">
				</div>
			</div>
			<div class="row">
				<div class="col-8"></div>
				<div class="col-4">
					<button class="btn btn-primary" type="submit" name="submit">Enregistrer</button>
					<button onclick="myClose" class="btn btn-danger">Annuler</button>
				</div>
			</div>
		</form>
	</div>
</div>

<script>
		var modal = document.getElementById("myModal");
		var btn = document.getElementById("myBtn");
		var btn = document.getElementById("myClose");
		var span = document.getElementsByClassName("close")[0];
		function showMymodal(){
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