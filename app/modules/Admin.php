

<?php

    class Admin {
        private $db;
        public function __construct() {
            $this->db = new Database();
        }

        public function checkAdmin($email, $password) {
            $this->db->query("SELECT * FROM admins WHERE Email = :email AND Password= :password");
            $this->db->bind(":email", $email);
            $this->db->bind(":password", $password);

            $row = $this->db->single();

            // check row
            if ($this->db->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        }
    }