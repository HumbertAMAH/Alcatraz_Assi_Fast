<?php 
    $id_vendeur = $_COOKIE['ASSIFAST_IDVENDEUR'];
    require('php/controller.php');
    $rController = new RumpleController();
    $data = $rController->getProductsByCommercantId($id_vendeur);
    $commandes = $rController->getBookingsByVendeurId($id_vendeur);
    $categories = $rController->getCategory();
    $sousCategories = $rController->getSousCategory();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
    <?php require_once('header.php'); ?>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
    <?php require_once('nav-menu.php'); ?>
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Mes Produits</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Acceuil</a></li>
          <li class="breadcrumb-item active">Produits</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Product Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Total <span>| Produits</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-bag"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo sizeof($data) ?></h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Product Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Commandes <span>| En cours</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo sizeof($commandes) ?></h6>
                      <span class="text-success small pt-1 fw-bold">8</span> <span class="text-muted small pt-2 ps-1">Nouvelle commande</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->


            <!-- Liste produits -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body pb-0">
                  <h5 class="card-title">Liste Produit</h5>

                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">Apercu</th>
                        <th scope="col">Produit</th>
                        <th scope="col">description</th>
                        <th scope="col">Prix</th>
                        <th scope="col">tags</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php 
                            foreach($data as $product){
                        ?>
                      <tr>
                        <th scope="row"><a href="#"><img src="images/produits/<?php echo $product['images']; ?>" alt=""></a></th>
                        <td><?php echo $product['nom']; ?></td>
                        <td><a href="#" class="text-primary fw-bold"><?php echo $product['description']; ?></a></td>
                        <td><?php echo $product['prix']; ?></td>
                        <td><?php echo $product['tags']; ?></td>
                        <td>
                            <form action="page-modification.php" method="post" >
                                <input type="hidden" name="id" value="<?php echo $product['id']; ?>" />
                                <input type="hidden" name="nom" value="<?php echo $product['nom'] ?>" />
                                <input type="hidden" name="description" value="<?php echo $product['description'] ?>" />
                                <input type="hidden" name="tags" value="<?php echo $product['tags'] ?>" />
                                <input type="hidden" name="prix" value="<?php echo $product['prix'] ?>" />
                                <input type="hidden" name="categorie" value="<?php echo $product['categorie'] ?>" />
                                <input type="hidden" name="sous_categorie" value="<?php echo $product['sous_categorie'] ?>" />
                                <input type="hidden" name="image" value="<?php echo $product['images'] ?>" />
                                <button type="submit" name="update"> <i class="bi bi-pencil-fill"></i> </button>
                            </form>
                            <span><a class="nav-link" href="php/modifierProduit.php?delete=&id=<?php echo $product['id']; ?>"><i style="color:red;" onclick =alert("Supprimer") class="bi bi-trash"></i></span>
                        </td>
                      </tr>
                      <?php } ?>

                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Liste Produits -->

          </div>
        </div><!-- End Left side columns -->

            <!-- Right side columns -->
            <div class="col-lg-4">

                <!-- Add Product -->
                <div class="card">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start"><h6>Filter</h6></li>
                            <li><a class="dropdown-item" href="#">Today</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div>

                    <div class="card-body pb-0">        
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Ajouter un produit</h5>
                                    <!-- Accordion without outline borders -->
                                    <div class="accordion accordion-flush" id="accordionFlushExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingOne">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                               
                                        </button>
                                            </h2>
                                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                            <form method="post" action="php/ajouterProduit.php" enctype="multipart/form-data" class="row g-3 needs-validation" novalidate>
                                                <div class="col-12">
                                                <label for="productName" class="form-label">Nom Produit</label>
                                                <input type="text" name="nom_produit" class="form-control" id="productName">
                                                <div class="invalid-feedback">Please entrer le nom du produit!</div>
                                                </div>

                                                <div class="col-12">
                                                <label for="productDescription" class="form-label">description</label>
                                                <input type="text" name="description_produit" class="form-control" id="productDescription">
                                                <div class="invalid-feedback">Please entrer la description!</div>
                                                </div>
                                                <div class="col-12">
                                                <label for="productPrice" class="form-label">Prix</label>
                                                <input type="text" name="prix_produit" class="form-control" id="productPrice">
                                                <div class="invalid-feedback">Please, entrer lz prix du produit!</div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="col-sm-10">
                                                        <select name="categorie_produit" class="form-select" aria-label="Default select example">
                                                        <option selected>Categorie</option>
                                                        <?php foreach($categories as $categorie) { ?>
                                                        <option value="<?php echo $categorie['id'] ?>"><?php echo $categorie['nom'] ?></option>
                                                        <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="col-sm-10">
                                                        <select name="sousCategorie_produit" class="form-select" aria-label="Default select example">
                                                        <option selected>Sous Categorie</option>
                                                        <?php foreach($sousCategories as $sousCategorie) { ?>
                                                        <option value="<?php echo $sousCategorie['id'] ?>"><?php echo $sousCategorie['nom'] ?></option>
                                                        <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                <label for="productTags" class="form-label">Tags</label>
                                                <input type="text" name="tags_produit" class="form-control" id="productTags">
                                                <div class="invalid-feedback">Please entrer quelque tags!</div>
                                                </div>

                                                <div class="col-12">
                                                    <label for="inputNumber" class="col-sm-2 col-form-label">Image</label>
                                                    <div class="col-sm-10">
                                                        <input type="file" class="form-control" id="formFile" name="image" >
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                <button class="btn btn-primary w-100" name="submit" type="submit">Ajouter</button>
                                                </div>
                                        </form>
                                            </div>
                                            </div>
                                        </div>
                                    </div><!-- End Accordion without outline borders -->
                                </div>
                            </div>
                        </div>
                 </div>
                </div><!-- End Budget Report -->
        </div><!-- End Right side columns -->
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>