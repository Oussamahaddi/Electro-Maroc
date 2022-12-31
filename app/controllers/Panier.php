

<?php

    class Panier extends controller {

        private $commandeModel;

        public function __construct() {
            $this->commandeModel = $this->model('commande');
        }
        
        public function commandeDetails() {

            $commandeCheck = $this->commandeModel->checkCommandes();

            $data = [
                'commandes' => $commandeCheck
            ];
            
            $this->view('allPages/panier', $data);
            

        }
    }