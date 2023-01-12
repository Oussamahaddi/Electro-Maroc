

<?php

class Cart {

    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    // public function setInCart() {

    //     $this->db->query("SELECT * FROM panier pa JOIN Product pr ON pa.id_product = pr.id_p; ");

    //     $row = $this->db->resultSet();

    //     if ($this->db->rowCount() > 0) {
    //         return $row;
    //     } else {
    //         return false;
    //     }
    // }

    public function setInCart($data) {
        $this->db->query("INSERT INTO `panier`( `id_product`, `id_client`, `quantite`)
                                    VALUES (:id_product, :id_client ,:quantity)");

        $this->db->bind(':id_product', $data['id_product']);
        $this->db->bind(':id_client', $data['id_client']);
        $this->db->bind(':quantity', $data['quantity']);

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