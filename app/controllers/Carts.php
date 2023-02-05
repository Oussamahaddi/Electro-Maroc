

<?php

    class Carts extends controller {
        private $cartModel;

        public function __construct() {
            $this->cartModel = $this->model('Cart');
        }

        public function addToCart($id) {
            // add product into cart
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $product = $this->cartModel->getProductInfo($id);
                if (isLoggedIn()) {
                    $data = [
                        'id_product' => $product->id_p,
                        'id_client' => $_SESSION['id'],
                        'quantity' => (int)trim($_POST['quantity']),
                        'create_date' => date('d-m-y'),
                        'sending_date' => '',
                        'retreving_date' => '',
                        'unit_price' => $product->selling_price,
                        'total_price' => $product->selling_price * (int)$_POST['quantity'],
                        'total_price_commande' => '',
                    ];
    
                    if ($this->cartModel->setInCart($data)) {
                        redirect('/Commandes/commandeDetails');
                    } else {
                        die('something wrong');
                    }
                } else {
                    redirect('/Authentification/login');
                }
            }

        }

        // public function getProductCart() {

        //     $cartProduct = $this->cartModel->getProductFromCart();

        //     $data = [
        //         'product_name' => $cartProduct
        //     ];

        //     $this->view('allPages/panier', $data);
        // }
    }