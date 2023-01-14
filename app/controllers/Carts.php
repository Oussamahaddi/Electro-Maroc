

<?php

    class Carts extends controller {
        private $cartModel;

        public function __construct() {
            $this->cartModel = $this->model('Cart');
        }

        public function addToCart($id) {
            // add product into cart
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (isLoggedIn()) {
                    $data = [
                        'id_product' => (int)$id,
                        'id_client' => $_SESSION['id'],
                        'quantity' => (int)$_POST['quantity']
                    ];
    
                    if ($this->cartModel->setInCart($data)) {
                        die('succe');
                    } else {
                        die('l9wada');
                    }
                } else {
                    redirect('/Authentification/login');
                }
            }

        }

        public function getProductCart() {

            $cartProduct = $this->cartModel->getProductFromCart();

            $data = [
                'product_name' => $cartProduct
            ];

            $this->view('allPages/panier', $data);
        }
    }