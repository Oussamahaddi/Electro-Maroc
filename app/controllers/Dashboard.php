

<?php

    class Dashboard extends Controller {

        private $productModule;
        public function __construct() {
            $this->productModule = $this->model('Product');
        }

        
    }