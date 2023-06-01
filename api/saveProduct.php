<?php
			header('Content-Type: application/json; charset=utf-8');

		require_once('rumpleQuery.php');

		$rQuery = new RumpleQuery();

			$id_vendeur= $_POST['id_vendeur'];
			$nom = $_POST['nom'];
			$description = $_POST['description'];
			$imgName = $_POST['images'];
			$categorie = $_POST['categorie'];
			$sousCategorie = $_POST['sous_categorie'];
			$tags = $_POST['tags'];
			$prix = $_POST['prix'];

		$req = $rQuery->insert('produits',['id_vendeur','nom','description','prix','images','categorie','sous_categorie','tags'],
			[$id_vendeur,$nom,$description,$prix,$imgName,$categorie,$sousCategorie,$tags]);	
			
		echo json_encode($req);

	?>