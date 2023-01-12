

<?php 

    class Pages extends Controller {
        private $productModel;
        public $commandeModel;
        public $categorieModel;
        public function __construct() {
            $this->commandeModel = $this->model('commande');
            $this->productModel = $this->model('Product');
            $this->categorieModel = $this->model('categorie');
        }

        public function index() {
            $this->view('allPages/index');
        }
        public function shop($idCategorie = null) {
            $allProduct = $this->productModel->getAllProduct();
            $allCategorie = $this->categorieModel->getAllCatgories();
            $selectedCategorie = $this->categorieModel->filterByCategorie($idCategorie);

            $data = [
                'products' => $allProduct,
                'categories' => $allCategorie,
                'select_by_categorie' => $selectedCategorie,
            ];

            $this->view('allPages/shop', $data);
        }
        public function contact() {
            $this->view('allPages/contact');
        }
    }