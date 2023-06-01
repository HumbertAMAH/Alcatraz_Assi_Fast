<?php 
	
    require_once('../api/rumpleQuery.php');
    $rQuery = new RumpleQuery();


    if(isset($_POST['submit'])){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $telephone = $_POST['telephone'];
        $latitude = $_POST['lat_vendeur'];
        $longitude = $_POST['lng_vendeur'];
        $produits = "";
        $imgName = "";
        /**$imgName = $_FILES['vendeur_img']['name'];
        $file_tmp_name = $_FILES['vendeur_img']['tmp_name'];
        move_uploaded_file($file_tmp_name, "../images/vendeurs/$imgName");*/
        $mdp = $_POST['mdp'];

        $req = $rQuery->insert('commercants',['nom','prenom','telephone','images','produits','latitude','longitude','mdp'],[$nom,$prenom,$telephone,$imgName,$produits,$latitude,$longitude,$mdp]);	
        if($req == "Operation successful"){
            header("Location: ../pages-login.html");
        }
        else{
            echo $req;
        }
    }


?>