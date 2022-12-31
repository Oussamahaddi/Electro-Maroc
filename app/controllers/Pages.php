

<?php 

    class Pages extends Controller {
        private $productModel;
        public $commandeModel;
        public function __construct() {
            $this->commandeModel = $this->model('commande');
            $this->productModel = $this->model('Product');
        }

        public function index() {
            $this->view('allPages/index');
        }
        public function shop() {
            $allProduct = $this->productModel->getAllProduct();

            $data = [
                'products' => $allProduct
            ];

            $this->view('allPages/shop', $data);
        }
        public function contact() {
            $this->view('allPages/contact');
        }
    }