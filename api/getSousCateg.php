<?php 
	header('Content-Type: application/json; charset=utf-8');
	require_once('rumpleQuery.php');

	$rQuery = new RumpleQuery();

	$data = array();
		try {
				$req = $rQuery->select('sous_categories',['*']);
				$data = $req;
			} catch (\Throwable $th) {
				echo "ERREUR".$th->getMessage();
			}
			
		echo json_encode($data);
?>