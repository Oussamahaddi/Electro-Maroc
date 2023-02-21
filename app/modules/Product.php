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

        public function getProductById($id) {

            $this->db->query("SELECT * FROM product p INNER JOIN category c ON c.id = p.category AND p.id_p = :id");
            $this->db->bind(':id', $id);

            $row = $this->db->single();
            return $row;
        }

        public function addToCart($data) {
            $this->db->query("INSERT INTO `commande`(
                                            `creation_date`, 
                                            `sending_date`, 
                                            `retreving_date`, 
                                            `id_client`, 
                                            `id_product`, 
                                            `unit_price`, 
                                            `quantity`, 
                                            `total_price_product`, 
                                            `total_price_commande`
                                        )
                                    VALUES (
                                        ':creation_date',
                                        ':sending_date',
                                        ':reciving_date',
                                        ':id_client',
                                        ':id_product',
                                        ':unit_price',
                                        ':quantity',
                                        ':total_price_product',
                                        ':total_price_commande'
                                    )");
            
            $this->db->bind(':creation_date', date('d-m-Y'));
            $this->db->bind(':sending_date', date('d-m-Y'));
            $this->db->bind(':reciving_date', date('d-m-Y'));
            $this->db->bind(':id_client', $data['id_client']);
            $this->db->bind(':id_product', $data['']);
            $this->db->bind(':unit_price', $data['']);
            $this->db->bind(':quantity', $data['']);
            $this->db->bind(':total_price_product', $data['']);
            $this->db->bind(':total_price_commande', $data['']);
        }

        public function getProductAsc() {
            $this->db->query("SELECT * FROM product ORDER BY selling_price DESC");
            $row = $this->db->resultSet();
            if ($this->db->rowCount() > 0) {
                return $row;
            } else {
                return false;
            }
        }

        public function getProductName() {
            $this->db->query("SELECT * FROM product ORDER BY libelle ASC");
            $row = $this->db->resultSet();
            if ($this->db->rowCount() > 0) {
                return $row;
            } else {
                return false;
            }
        }

    }