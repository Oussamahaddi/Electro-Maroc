

<?php

    class Commandes extends Controller {
        private $commandeModel;

        public function __construct() {
            $this->commandeModel = $this->model('Commande');
        }
        public function commandeDetails() {

            $commandeCheck = $this->commandeModel->checkCommandes();

            $data = [
                'commandes' => $commandeCheck
            ];
            
            $this->view('allPages/panier', $data);
            

        }
    }