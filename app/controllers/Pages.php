

<?php 

    class Pages extends Controller {
        public function __construct() {

        }

        public function index() {
            $this->view('allPages/index');
        }
        public function test() {
            $data = ['test' => 'fukc'];
            $this->view('allPages/test', $data);
        }
    }