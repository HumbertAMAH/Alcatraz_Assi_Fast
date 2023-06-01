<?php
    $targetDir = "../images/vendeurs/";
    $targetFile = $targetDir . basename($_FILES["image"]["name"]);
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Vérifier si le fichier est une image

        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if ($check !== false) {
            move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);
            echo "Image uploaded successfully";
            // Insérer le chemin de l'image dans la base de données MySQL
            // Ici, vous devez écrire le code pour effectuer l'insertion dans votre base de données
        } else {
            echo "Invalid image file";
    }
?>
