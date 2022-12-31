<?php

    class Product {

        private $db;
        public function __construct() {
            $this->db = new Database;
        }

        public function getProductDetail() {
            $this->db->query("SELECT * FROM product");

            $row = $this->db->resultSet();

            if ($this->db->rowCount() > 0) {
                return $row;
            } else {
                return false;
            }
        }

        public function getAllProduct() {
            $this->db->query("SELECT * FROM product");

            $row = $this->db->resultSet();

            if ($this->db->rowCount() > 0) {
                return $row;
            } else {
                return false;
            }
        }

    }