

<?php 

    class Pages extends Controller {
        public function __construct() {

        }

        public function index() {
            $this->view('allPages/index');
        }
        public function shop() {
            $data = [];
            $this->view('allPages/shop');
        }
    }