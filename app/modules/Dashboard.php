

<?php

    class Dashboard {
        private $db;
        public function __construct() {
            $this->db = new Database;
        }

        public function getAllProduct() {
            $this->db->query("SELECT * FROM product p INNER JOIN category c");

            $row = $this->db->resultSet();

            if ($this->db->rowCount() > 0) {
                return $row;
            } else {
                return false;
            }
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
            if ($this->db->rowCount() > 0) {
                return $row;
            } else {
                return false;
            }
        }
        public function getCategorieByProduct($productCategorieId) {
            $this->db->query("SELECT * FROM category c INNER JOIN product p ON c.id = p.category");
            $row = $this->db->single();
            if ($this->db->rowCount() > 0) {
                return $row;
            } else {
                return false;
            }
        }

        public function getProductById($id) {
            $this->db->query("SELECT * FROM product WHERE id_p = :id");
            $this->db->bind(':id', $id);
            $row = $this->db->single();
            if ($this->db->rowCount() > 0) {
                return $row;
            } else {
                return false;
            }
        }

        public function getCategoryByName($catName) {
            $this->db->query("SELECT * FROM `category` WHERE name = :name");
            $this->db->bind(':name', $catName);
            $row = $this->db->single();
            if ($this->db->rowCount() > 0) {
                return $row;
            } else {
                return false;
            }
        }

        public function add($data) {
            $this->db->query("INSERT INTO `product`(
                                    `reference`, 
                                    `libelle`, 
                                    `bar_code`, 
                                    `retail_price`, 
                                    `final_price`, 
                                    `selling_price`, 
                                    `description`, 
                                    `category`, 
                                    `image`, 
                                    `quantity`) 
                                VALUES (
                                    :ref,
                                    :libelle,
                                    :code_bar,
                                    :r_price,
                                    :f_price,
                                    :s_price,
                                    :description,
                                    :category,
                                    :image,
                                    :quantity
                                )");
            $this->db->bind(':ref', $data['reference']);
            $this->db->bind(':libelle', $data['product_name']);
            $this->db->bind(':code_bar', $data['bar_code']);
            $this->db->bind(':r_price', $data['retail_price']);
            $this->db->bind(':f_price', $data['final_price']);
            $this->db->bind(':s_price', $data['selling_price']);
            $this->db->bind(':description', $data['product_description']);
            $this->db->bind(':category', $data['category']);
            $this->db->bind(':image', $data['product_image']);
            $this->db->bind(':quantity', $data['product_quantity']);

            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function edit($data) {
            $this->db->query("UPDATE `product` SET `reference`= :ref, `libelle`= :libelle, `bar_code`= :code_bar, `retail_price`= :r_price, `final_price`= :f_price, `selling_price`= :s_price, `description`= :description, `category`= :category, `image`= :image, `quantity`= :quantity WHERE id_p = :id");
            $this->db->bind(':ref', $data['reference']);
            $this->db->bind(':libelle', $data['product_name']);
            $this->db->bind(':code_bar', $data['bar_code']);
            $this->db->bind(':r_price', $data['retail_price']);
            $this->db->bind(':f_price', $data['final_price']);
            $this->db->bind(':s_price', $data['selling_price']);
            $this->db->bind(':description', $data['product_description']);
            $this->db->bind(':category', $data['category']);
            $this->db->bind(':image', $data['product_image']);
            $this->db->bind(':quantity', $data['product_quantity']);
            $this->db->bind(':id', $data['id']);
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

        // public function delet($id) {
        //     $this->db->query("DELETE FROM `products` WHERE id = :id");
        //     $this->db->bind(':id', $id);
        //     if ($this->db->execute()) {
        //         return true;
        //     } else {
        //         return false;
        //     }
        // }
    }