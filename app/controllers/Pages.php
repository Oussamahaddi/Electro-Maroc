

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
            $commandeCheck = $this->commandeModel->getAllCommande();
            $data = [
                'commandes' => $commandeCheck,
            ];
            $this->view('allPages/index', $data);
        }
        public function shop($idCategorie = null) {
            $allProduct = $this->productModel->getAllProduct();
            $allCategorie = $this->categorieModel->getAllCatgories();
            $selectedCategorie = $this->categorieModel->filterByCategorie($idCategorie);

            $commandeCheck = $this->commandeModel->getAllCommande();

            $data = [
                'products' => $allProduct,
                'categories' => $allCategorie,
                'select_by_categorie' => $selectedCategorie,
                'commandes' => $commandeCheck,
            ];

            $this->view('allPages/shop', $data);
        }
        public function category($idCategorie = null) {
            $allCategorie = $this->categorieModel->getAllCatgories();
            $selectedCategorie = $this->categorieModel->filterByCategorie($idCategorie);

            $commandeCheck = $this->commandeModel->getAllCommande();

            $data = [
                'categories' => $allCategorie,
                'select_by_categorie' => $selectedCategorie,
                'commandes' => $commandeCheck
            ];

            $this->view('allPages/category', $data);
        }
        public function contact() {
            $commandeCheck = $this->commandeModel->getAllCommande();
            $data = ['commandes' => $commandeCheck];
            $this->view('allPages/contact', $data);
        }

        public function ascend($idCategorie = null) {
            $allCategorie = $this->categorieModel->getAllCatgories();
            $selectedCategorie = $this->categorieModel->filterByCategorie($idCategorie);
            $asc = $this->productModel->getProductAsc();
            $commandeCheck = $this->commandeModel->getAllCommande();

            $data = [
                'categories' => $allCategorie,
                'select_by_categorie' => $selectedCategorie,
                'products' => $asc,
                'commandes' => $commandeCheck
            ];
            $this->view('allPages/shop', $data);
        }
        public function descend($idCategorie = null) {
            $allCategorie = $this->categorieModel->getAllCatgories();
            $selectedCategorie = $this->categorieModel->filterByCategorie($idCategorie);
            $commandeCheck = $this->commandeModel->getAllCommande();
            $desc = $this->productModel->getProductName();
            $data = [
                'categories' => $allCategorie,
                'select_by_categorie' => $selectedCategorie,
                'products' => $desc,
                'commandes' => $commandeCheck
            ];
            $this->view('allPages/shop', $data);
        }
    }