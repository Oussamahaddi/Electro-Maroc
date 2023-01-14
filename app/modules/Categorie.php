

<?php

    class Categorie {

        private $db;
        public function __construct() {
            $this->db = new Database;
        }

        public function getAllCatgories() {
            $this->db->query("SELECT * FROM category");
            
            $row = $this->db->resultSet();

            return $row;
        }

        public function filterByCategorie($idCategorie) {
            $this->db->query("SELECT * FROM product WHERE category = :id_category");
            $this->db->bind(':id_category', $idCategorie);

            $row = $this->db->resultSet();

            return $row;

        }

    }