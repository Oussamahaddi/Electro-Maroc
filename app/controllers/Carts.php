

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
                        'id_product' => $id,
                        'id_client' => $_SESSION['id'],
                        'quantity' => (int)trim($_POST['quantity']),
                    ];

                    if ($this->cartModel->setInCart($data)) {
                        redirect('Pages/shop');
                    } else {
                        die('something wrong');
                    }
                } else {
                    redirect('Authentification/login');
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