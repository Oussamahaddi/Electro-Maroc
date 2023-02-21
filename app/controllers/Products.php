

<?php

    class Products extends Controller {

        private $productModel;
        private $commandeModel;

        public function __construct() {
            $this->commandeModel = $this->model('Commande');
            $this->productModel = $this->model('Product');
        }

        public function productdetail($id) {

            $product = $this->productModel->getProductById($id);
            $commandeCheck = $this->commandeModel->getAllCommande();

            $data = [
                'id' => $product->id_p,
                'libelle' => $product->libelle,
                'description' => $product->description,
                'selling_price' => $product->selling_price,
                'image' => $product->image,
                'category' => $product->name,
                'quantity' => $product->quantity,
                'commandes' => $commandeCheck
            ];

            $this->view('allPages/productdetail', $data);
        }

    }