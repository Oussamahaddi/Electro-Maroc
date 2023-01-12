
<?php

// load modeles and views

class Controller {
    // load model
    public function model($model) {
        // require model file
        require_once '../app/modules/' . $model .'.php';
        // instatiate model
        return new $model();
    }

    // load view
    public function view($view, $data = []) {
        if (file_exists('../app/views/' . $view . '.php')) {
            // require views file
            require_once '../app/views/' . $view . '.php';
        } else {
            die('view file dosent existe!!!!!!!!');
        }
    }
}