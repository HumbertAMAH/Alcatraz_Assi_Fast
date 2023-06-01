<?php 
header('Content-Type: application/json; charset=utf-8');
require_once('rumpleQuery.php');

$rQuery = new RumpleQuery();
$id_vendeur = $_GET['id'];
$data = array();
    try {
            $req = $rQuery->select('commandes',['*'],"id_vendeur",$id_vendeur);
            $data = $req;
      } catch (\Throwable $th) {
            echo "ERREUR".$th->getMessage();
        }
    echo json_encode($data);

?>