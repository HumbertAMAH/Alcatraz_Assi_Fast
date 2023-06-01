<?php 
    require_once('controller.php');
    $rController = new RumpleController();
    if(isset($_POST['update'])){
        $id_vendeur= 10; //$_POST['id_vendeur'];
        $id = $_POST['id'];
        $nom = $_POST['nom_produit'];
        $description = $_POST['description_produit'];
        $categorie = $_POST['categorie_produit'];
        $sousCategorie = $_POST['sousCategorie_produit'];
        $tags = $_POST['tags_produit'];
        $prix = $_POST['prix_produit'];

        $rController->updateProduct($id,$nom,$description,$prix,$categorie,$sousCategorie,$tags);
        header('Location: ../produits.php');
    }else{
        header('Location: ../produits.php');
    }

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $rController->deleteProductsById($id);
        header('Location: ../produits.php'); 
    }else {
        header('Location: ../produits.php');

    }

?>