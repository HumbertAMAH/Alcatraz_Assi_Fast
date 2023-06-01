<?php 
    require_once("rumpleQuery.php");
Class RumpleController{

        public function getProducts(){

	        $rQuery = new RumpleQuery();
        	$data = array();
            try {
                    $req = $rQuery->select('produits',['*']);
                    $data = $req;
                } catch (\Throwable $th) {
                    echo "ERREUR".$th->getMessage();
                }
                return $data;
            }
        public function getProductsByCommercantId($id_vendeur){

            $rQuery = new RumpleQuery();
            $data = array();
                try {
                        $req = $rQuery->select('produits',['*'],"id_vendeur",$id_vendeur);
                        $data = $req;
                  } catch (\Throwable $th) {
                        echo "ERREUR".$th->getMessage();
                    }
                return $data;
        }
        public function ajouterProduit($id_vendeur,$nom,$description,$prix,$imgName,$id_categorie,$id_sousCategorie,$tags){
            $rQuery = new RumpleQuery();
		    $req = $rQuery->insert('produits',['id_vendeur','nom','description','prix','images','categorie','sous_categorie','tags'],
			[$id_vendeur,$nom,$description,$prix,$imgName,$id_categorie,$id_sousCategorie,$tags]);	
        }

        public function deleteProductsById($id_product){
            $rQuery = new RumpleQuery();
            $rQuery->delete('produits','id',$id_product);
        }

        public function updateProduct($id,$nom,$description,$prix,$id_categorie,$id_sousCategorie,$tags){
            $rQuery = new RumpleQuery();
            $rQuery->update('produits',['nom','description','prix','categorie','sous_categorie','tags'],[$nom,$description,$prix,$id_categorie,$id_sousCategorie,$tags],'id',$id);
        }

        public function getBookingsByVendeurId($id_vendeur){
            $rQuery = new RumpleQuery();
            $data = array();
                try {
                        $req = $rQuery->select('commandes',['*'],"id_vendeur",$id_vendeur);
                        $data = $req;
                  } catch (\Throwable $th) {
                        echo "ERREUR".$th->getMessage();
                    }
                return $data;
        }

        public function getClientById($id_client){
            $rQuery = new RumpleQuery();
            $data = array();
                try {
                        $req = $rQuery->select('clients',['*'],"id",$id_client);
                        $data = $req;
                  } catch (\Throwable $th) {
                        echo "ERREUR".$th->getMessage();
                    }
                return $data;
        }
        public function getProductById($id_produit){
            $rQuery = new RumpleQuery();
            $data = array();
                try {
                        $req = $rQuery->select('produits',['*'],"id",$id_produit);
                        $data = $req;
                  } catch (\Throwable $th) {
                        echo "ERREUR".$th->getMessage();
                    }
                return $data;
        }
        public function getVendeurById($id_vendeur){
            $rQuery = new RumpleQuery();
            $data = array();
                try {
                        $req = $rQuery->select('commercants',['*'],"id",$id_vendeur);
                        $data = $req;
                  } catch (\Throwable $th) {
                        echo "ERREUR".$th->getMessage();
                    }
                return $data;
        }
        
        public function getProductsByCategory($categorie_id){
            $rQuery = new RumpleQuery();
            $data = array();
                try {
                        $req = $rQuery->select('produits',['*'],"categorie",$categorie_id);
                        $data = $req;
                  } catch (\Throwable $th) {
                        echo "ERREUR".$th->getMessage();
                    }
                return $data;
            }

        public function getCategory(){
            $rQuery = new RumpleQuery();
	        $data = array();
		    try {
				$req = $rQuery->select('categories',['*']);
				$data = $req;
			} catch (\Throwable $th) {
				echo "ERREUR".$th->getMessage();
			}
            return $data;
        }

        public function getSousCategory(){
            $rQuery = new RumpleQuery();
            $data = array();
            try {
                $req = $rQuery->select('sous_categories',['*']);
                    $data = $req;
                } catch (\Throwable $th) {
                    echo "ERREUR".$th->getMessage();
                }
            return $data;
        }
        public function getSousCategoryByCategoryId($categorie_id) {
            $rQuery = new RumpleQuery();
            $data = array();
            try {
                    $req = $rQuery->select('sous_categories',['*'],"categorie_id",$categorie_id);
                    $data = $req;
            } catch (\Throwable $th) {
                echo "ERREUR".$th->getMessage();
			}
            return $data;
        }
    }




?>