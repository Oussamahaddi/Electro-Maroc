

<?php

    class Product extends Controller {

        private $productModel;

        public function __construct() {
            $this->productModel = $this->model('Product');
        }

        public function productdetail() {

            $data = [
                'products' => ''
            ];
            $this->view('allPages/productdetail', $data);
        }
    }