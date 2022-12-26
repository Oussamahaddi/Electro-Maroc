
<?php

    class Client {

        private $db;
        public function __construct() {
            $this->db = new Database;
        }

        public function setClient($data) {
            $this->db->query('INSERT INTO client (full_name, email, password) VALUES(:fname, :email, :password)');
            // Bind values
            $this->db->bind(':fname', $data['fullname']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':password', $data['password']);

            // Execute
            if($this->db->execute()){
                return true;
            } else {
                return false;
            }
        }


        // check if email already existe when trying to registre
        public function findClientByEmail($email) {
            $this->db->query("SELECT * FROM client WHERE email = :email");
            $this->db->bind(':email', $email);

            $row = $this->db->single();

            if ($this->db->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        }

        public function checkClient($email, $password) {
            $this->db->query("SELECT * FROM client WHERE email = :email AND password = :password");
            $this->db->bind(":email", $email);
            $this->db->bind(":password", $password);

            $row = $this->db->single();

            // check row
            if ($this->db->rowCount() > 0) {
                return $row;
            } else {
                return false;
            }
        }
    }