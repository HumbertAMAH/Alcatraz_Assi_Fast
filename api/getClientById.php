<?php 
	header('Content-Type: application/json; charset=utf-8');
	require_once('rumpleQuery.php');

	$rQuery = new RumpleQuery();
	$client_id = $_GET['id'];
	$data = array();
		try {
				$req = $rQuery->select('clients',['*'],"id",$client_id);
				$data = $req;
			} catch (\Throwable $th) {
				echo "ERREUR".$th->getMessage();
			}
			
		echo json_encode($data);
?>