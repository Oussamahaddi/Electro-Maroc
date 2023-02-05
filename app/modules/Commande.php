<?php

    class Commande {

        private $db;
        public function __construct() {
            $this->db = new Database;
        }

        public function getAllCommande() {

            $this->db->query("SELECT * FROM commande JOIN product");

            $row = $this->db->resultSet();

            if ($this->db->rowCount() > 0) {
                return $row;
            } else {
                return false;
            }
        }

    }