

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

        public function sendCommande() {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $products = $_POST['products'];
                $quantity = $_POST['quantity'];
                
                $data = [
                    'id_client' => $_SESSION['id'],
                    'creation_date' => date('d-m-y'),
                ];
                $idCommande = $this->commandeModel->createCommande($data);
                if ($idCommande) {
                    for ($i = 0; $i < count($products); $i++) {
                        $data = [
                            'id_product' => $products[$i],
                            'id_commande' => $idCommande,
                            'quantite' => $quantity[$i],
                        ];

                        $this->commandeModel->addProductCommande($data);
                    }
                    if ($this->commandeModel->finishCommande()) {
                        redirect('commandes/commandesDetails');
                    } else {
                        die('SOMETHING WRONG ???');
                    }
                }
            }
        }

    }