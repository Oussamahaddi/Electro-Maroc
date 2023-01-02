

<?php

    class Products extends Controller {

        private $productModel;

        public function __construct() {
            $this->productModel = $this->model('Product');
        }

        public function productdetail($id) {

            $product = $this->productModel->getProductById($id);

            $data = [
                'id' => $product->id_p,
                'libelle' => $product->libelle,
                'description' => $product->description,
                'selling_price' => $product->selling_price,
                'image' => $product->image,
                'category' => $product->name,
                'quantity' => $product->quantity
            ];

            $this->view('allPages/productdetail', $data);
        }

    }