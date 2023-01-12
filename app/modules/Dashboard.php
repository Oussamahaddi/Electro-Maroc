

<?php

    class Dashboard {
        private $db;
        public function __construct() {
            $this->db = new Database;
        }

        public function getAllProduct() {
            $this->db->query("SELECT * FROM product");

            $row = $this->db->resultSet();

            return $row;
        }
        public function getAllClient() {
            $this->db->query("SELECT * FROM Client");

            $row = $this->db->resultSet();

            return $row;
        }
        public function getAllOrder() {
            $this->db->query("SELECT * FROM commande");

            $row = $this->db->resultSet();

            return $row;
        }
        public function getAllCategorie() {
            $this->db->query("SELECT * FROM category");

            $row = $this->db->resultSet();

            return $row;
        }
    }