<?php

    class Commande {

        private $db;
        public function __construct() {
            $this->db = new Database;
        }

        public function checkCommandes() {

            $this->db->query("SELECT * FROM commande");

            $row = $this->db->resultSet();

            if ($this->db->rowCount() > 0) {
                return $row;
            } else {
                return false;
            }
        }

    }