

<?php

    class Dashboards extends Controller {

        private $dashboardModel;
        public function __construct() {
            $this->dashboardModel = $this->model('Dashboard');
        }

        public function statistique() {
            $products = $this->dashboardModel->getAllProduct();
            $categories = $this->dashboardModel->getAllCategorie();
            $clients = $this->dashboardModel->getAllClient();
            $orders = $this->dashboardModel->getAllOrder();

            $data = [
                'products_stats' => count($products),
                'categories_stats' => count($categories),
                'clients_stats' => count($clients),
                'orders_stats' => count($orders)
            ];

            $this->view('Dash/Statistique', $data);
        }
    }