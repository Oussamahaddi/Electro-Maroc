

<?php

    class Authentification extends Controller {

        private $db;
        private $cd;
        private $admModule;
        private $clientModel;
        public function __construct() {
            $this->db = $this->model('Admin');
            $this->cd = $this->model('Client');
        }


        public function registre() {
            
            $this->clientModel = $this->model('client');
            // Check for POST
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                // Process form
        
                // Sanitize POST data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                // Init data
                $data =[
                    'fullname' => trim($_POST['fullname']),
                    'email' => trim($_POST['email']),
                    'password' => trim($_POST['password']),
                    'confirm_password' => trim($_POST['confirm_password']),
                    'fullname_err' => '',
                    'email_err' => '',
                    'password_err' => '',
                    'confirm_password_err' => ''
                ];

                // Validate Name
                if(empty($data['fullname'])){
                    $data['fullname_err'] = 'Pleae enter Full Name';
                }

                // Validate Email
                if(empty($data['email'])){
                    $data['email_err'] = 'Pleae enter email';
                } else {
                    // Check email
                    if($this->clientModel->findClientByEmail($data['email'])){
                        $data['email_err'] = 'Email is already taken';
                    }
                }

                // Validate Password
                if(empty($data['password'])){
                    $data['password_err'] = 'Pleae enter password';
                } else if (strlen($data['password']) < 6){
                    $data['password_err'] = 'Password must be at least 6 characters';
                }

                // Validate Confirm Password
                if(empty($data['confirm_password'])){
                    $data['confirm_password_err'] = 'Pleae confirm password';
                } else {
                    if($data['password'] != $data['confirm_password']){
                        $data['confirm_password_err'] = 'Passwords do not match';
                    }
                }

                // Make sure errors are empty
                if(empty($data['email_err']) && empty($data['fullname_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])){
                    // Validated
                    // Hash Password
                    // $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                    // Register User
                    if($this->clientModel->setClient($data)){
                        
                        redirect('Authentification/login');
                    } else {
                        die('Something went wrong');
                    }

                } else {
                    // Load view with errors
                    $this->view('log/registre', $data);
                }

            } else {
                // Init data
                $data =[
                'fullname' => '',
                'email' => '',
                'password' => '',
                'confirm_password' => '',
                'fullname_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirm_password_err' => ''
                ];

                // Load viewlog/login
                $this->view('log/registre', $data);
            }
        }

        public function login() {

            $this->admModule = $this->model('Admin');

            // check for post
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // process form
                // sanitize post data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                // init data
                $data = [
                    'Email' => trim($_POST['Email']),
                    'Password' => trim($_POST['Password']),
                    'Email_err' => '',
                    'Password_err' => '',
                    'Email_Password_err' => ''
                ];

                // validate email
                if (empty($data['Email'])) {
                    $data['Email_err'] = 'Please enter email';
                }

                // validate password
                if (empty($data['Password'])) {
                    $data['Password_err'] = 'Please enter password';
                }

                // check if there is no erreur
                if (empty($data['Email_err']) && empty($data['Password_err'])) {
                    // check for validate email
                    $loginCheck = $this->admModule->checkAdmin($data['Email'], $data['Password']);
                    if ($loginCheck) {
                        // create session
                        $this->createAdminSession($loginCheck);
                        die("SUCEE");
                    } else {
                        // if not found
                        $data['Email_Password_err'] = 'Email or Password incorrect !!!';
                        $this->view('log/login', $data);
                    }
                } else {
                    // load view page width error
                    $this->view('log/login', $data);
                }


            } else {
                // init data
                $data = [
                    'Email' => '',
                    'Password' => '',
                    'Email_err' => '',
                    'Password_err' => '',
                    'Email_Password_err' => '',
                ];

                // load view
                $this->view('log/login', $data);
            }
        }


        

        public function createAdminSession($admin) {
            $_SESSION['Email'] = $admin->email;
            redirect('Pages/shop');
        }

    }