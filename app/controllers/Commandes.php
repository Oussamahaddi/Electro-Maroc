

<?php

    class Commandes extends Controller {
        private $commandeModel;

        public function __construct() {
            $this->commandeModel = $this->model('Commande');
        }
        public function commandeDetails() {

            $commandeCheck = $this->commandeModel->getAllCommande();

            $data = [
                'commandes' => $commandeCheck
            ];
            
            $this->view('allPages/panier', $data);
            

        }

        public function removeComande($idCommande) {
            if ($this->commandeModel->remove($idCommande)) {
                redirect('/commandes/commandeDetails');
            } else {
                die('something wrong');
            }
        }

    }