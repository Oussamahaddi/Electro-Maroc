

<?php

    class Carts extends controller {
        private $cartModel;

        public function __construct() {
            $this->cartModel = $this->model('Cart');
        }

        public function addToCart($id) {

            $product = $this->cartModel->getProductById($id);

            $data = [
                'id_product' => $product->id_p,
                'id_client' => $_SESSION['id'],
                'quantity' => $product->quantity
            ];

            if ($this->cartModel->addToCart($data)) {
            die('succe');
            } else {
            die('l9wada');
            }

        }

        public function getProductCart() {

            $cartProduct = $this->cartModel->getProductFromCart();

            $data = [
                'product_name' => $cartProduct
            ];

            return $data;
        }
    }