<?php
			header('Content-Type: application/json; charset=utf-8');

		require_once('rumpleQuery.php');

		$rQuery = new RumpleQuery();

			$id_vendeur= $_POST['id_vendeur'];
			$id_client = $_POST['id_client'];
			$id_produit = $_POST['id_produit'];

		$req = $rQuery->insert('commandes',['id_vendeur','id_produit','id_client'],
			[$id_vendeur,$id_produit,$id_client,]);	
			
		echo json_encode($req);

	?>