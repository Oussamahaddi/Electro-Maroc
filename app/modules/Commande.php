<?php

    class Commande {

        private $db;
        public function __construct() {
            $this->db = new Database;
        }

        public function getAllCommande() {

            $this->db->query("SELECT * FROM panier INNER JOIN product ON panier.id_product = product.id_p");

            $row = $this->db->resultSet();

            if ($this->db->rowCount() > 0) {
                return $row;
            } else {
                return false;   
            }
        }

        public function remove($id) {
            $this->db->query("DELETE FROM panier WHERE id = :id");
            $this->db->bind(':id', $id);

            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function createCommande($data) {
            $this->db->beginTransaction();
            $this->db->query("INSERT INTO `commande`(`id_client`) VALUES (:id_c)");
            $this->db->bind(':id_c', $data['id_client']);
            $this->db->execute();
            return $this->db->lastInserId();
        }

        public function addProductCommande($data) {
            $this->db->query("INSERT INTO `product_commande`(`id_product`, `id_commande`, `quantite`) VALUES (:id_p, :id_c, :quantite)");
            $this->db->bind(':id_p', $data['id_product']);
            $this->db->bind(':id_c', $data['id_commande']);
            $this->db->bind(':quantite', $data['quantite']);
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function finishCommande() {
            $this->db->commit();
        }

    }