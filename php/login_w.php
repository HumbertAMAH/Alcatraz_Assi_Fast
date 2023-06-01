<?php
		//header('Content-Type: application/json; charset=utf-8');

		require_once('../api/rumpleQuery.php');

		$rQuery = new RumpleQuery();

		if(isset($_POST['submit'])){
			$telephone= $_POST['telephone'];
			$mdp = $_POST['mdp'];
			$req = $rQuery->auth("commercants",$telephone,$mdp);

			//var_dump($req);
			//echo("$req[0]");
			if($req != false){
				//echo $_COOKIE['id_vendeur'];
				setcookie("ASSIFAST_IDVENDEUR",$req[0]['id'],time() + (86400 * 30), "/");
				header("Location:../index.php");
			}
			else{
				header("Location:../pages-login.html");
			}
		}
		
?>