

<?php

class Cart {

    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    public function getProductInfo($id) {

        $this->db->query("SELECT * FROM product WHERE id_p = :id");
        $this->db->bind(':id', $id);

        $row = $this->db->single();

        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
    }

    public function setInCart($data) {
        $this->db->query("INSERT INTO `panier`(`id_product`, `id_client`, `quantite`) VALUES (:id_p, :id_c, :quantite)");
        $this->db->bind(':id_p', $data['id_product']);
        $this->db->bind(':id_c', $data['id_client']);
        $this->db->bind(':quantite', $data['quantity']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getProductFromCart() {

        $this->db->query("SELECT * FROM panier pa JOIN Product pr ON pa.id_product = pr.id_p");

        $row = $this->db->resultSet();

        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
    }

}