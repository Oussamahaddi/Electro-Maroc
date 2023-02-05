

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
        $this->db->query("INSERT INTO `commande`(`creation_date`, 
                                                `sending_date`, 
                                                `retreving_date`, 
                                                `id_client`, 
                                                `id_product`, 
                                                `unit_price`, 
                                                `quantity`, 
                                                `total_price_product`, 
                                                `total_price_commande`) 
                                            VALUES (
                                                :c_date,
                                                :s_date,
                                                :ret_date,
                                                :id_client,
                                                :id_product,
                                                :u_price,
                                                :Q,
                                                :t_p_product,
                                                :t_p_commande
                                            )");

        $this->db->bind(':c_date', $data['create_date']);
        $this->db->bind(':s_date', $data['sending_date']);
        $this->db->bind(':ret_date', $data['retreving_date']);
        $this->db->bind(':id_client', $data['id_client']);
        $this->db->bind(':id_product', $data['id_product']);
        $this->db->bind(':u_price', $data['unit_price']);
        $this->db->bind(':Q', $data['quantity']);
        $this->db->bind(':t_p_product', $data['total_price']);
        $this->db->bind(':t_p_commande', $data['total_price_commande']);

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