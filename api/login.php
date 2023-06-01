<?php
		//header('Content-Type: application/json; charset=utf-8');

		require_once('rumpleQuery.php');

		$rQuery = new RumpleQuery();

			$telephone= $_POST['telephone'];
			$mdp = $_POST['mdp'];
	

		$req = $rQuery->auth("commercants",$telephone,$mdp);

		echo json_encode($req);

		
?>