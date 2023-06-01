<?php
			header('Content-Type: application/json; charset=utf-8');

		require_once('rumpleQuery.php');

		$rQuery = new RumpleQuery();

			$nom= $_POST['nom'];
			$prenom = $_POST['prenom'];
			$email = $_POST['email'];
			$telephone = $_POST['telephone'];
			$mdp = $_POST['mdp'];
		
		$req = $rQuery->insert('clients',['nom','prenom','email','telephone','mdp'],
			[$email,$prenom,$email,$telephone,$mdp]);	
			
		echo json_encode($req);

	?>