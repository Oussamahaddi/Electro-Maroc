<?php

    class Commande {

        private $db;
        public function __construct() {
            $this->db = new Database;
        }

        public function getAllCommande() {

            $this->db->query("SELECT * FROM commande JOIN product WHERE commande.id_product = product.id_p");

            $row = $this->db->resultSet();

            if ($this->db->rowCount() > 0) {
                return $row;
            } else {
                return false;
            }
        }

        public function remove($id) {
            $this->db->query("DELETE FROM commande WHERE id = :id");
            $this->db->bind(':id', $id);

            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

    }