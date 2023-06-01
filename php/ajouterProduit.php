<?php 
    require_once('controller.php');
    $rController = new RumpleController();

    if(isset($_POST['submit'])){
        $id_vendeur= 10; //$_POST['id_vendeur'];
        $nom = $_POST['nom_produit'];
        $description = $_POST['description_produit'];
        $categorie = $_POST['categorie_produit'];
        $sousCategorie = $_POST['sousCategorie_produit'];
        $tags = $_POST['tags_produit'];
        $prix = $_POST['prix_produit'];
        $imgName = $_FILES['image']['name'];
        $targetDir = "../images/produits/";
        $targetFile = $targetDir . basename($_FILES["image"]["name"]);
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Vérifier si le fichier est une image

        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if ($check !== false) {
            move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);
            $rController->ajouterProduit($id_vendeur,$nom,$description,$prix,$imgName,$categorie,$sousCategorie,$tags);
            header("Location: ../produits.php");
        } else {
            echo "Invalid image file";
    }
    }

?>