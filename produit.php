<?php
	require("fonctions/traitement.php");
	$produits = getProduit();

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
					    	<td colspan="14">Nom Produit<i class='bx bx-caret-up'></i></td>
					     		<td>Prix<i class='bx bx-caret-up'></i><i class='bx bx-caret-down'></i></td>
					     		<td colspan="2">Informations additionnelles</td>
					     		<td>Action</td>
					     	</tr>						
					</thead>
					<tbody style="padding: 15px;">
					<?php foreach($produits as $produit): ?>
					    <tr class="ligne">
					    	<td colspan="14"><?= $produit->libelle ?> </td>
					     	<td><?= $produit->prix ?></td>
					     	<td colspan="2"><?= $produit->description ?></td>
					     	<td><i class='bx bxs-trash'></i><i class='bx bxs-pencil'></i></td>
					    </tr>
					<?php endforeach ?>
					    
					    <tr align="CENTER">
							<div class="footer">
								<td colspan="18"><button class="btn btn-primary" type="submit"><i class='bx bxs-message-square-add'>Ajouter nouveaux produits</i></button></td>
							</div>
						</tr>
					</tbody>
				</table>

			</div>
			</div>