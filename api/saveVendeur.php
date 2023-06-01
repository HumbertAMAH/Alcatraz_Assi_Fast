<?php 
	header('Content-Type: application/json; charset=utf-8');
	require_once('rumpleQuery.php');

	$rQuery = new RumpleQuery();

	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$telephone = $_POST['telephone'];
	$latitude = $_POST['latitude'];
	$longitude = $_POST['longitude'];
	$produits = $_POST['produits'];
	$imgName = $_POST['images'];
	/**$imgName = $_FILES['vendeur_img']['name'];
		$file_tmp_name = $_FILES['vendeur_img']['tmp_name'];
		move_uploaded_file($file_tmp_name, "../images/vendeurs/$imgName");*/
	$mdp = $_POST['mdp'];

	$req = $rQuery->insert('commercants',['nom','prenom','telephone','images','produits','latitude','longitude','mdp'],[$nom,$prenom,$telephone,$imgName,$produits,$latitude,$longitude,$mdp]);	
			
		echo json_encode($req);
?>