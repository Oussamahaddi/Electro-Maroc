
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
        // check for view file
        // ob_start();
        // include_once APPROOT . '/views/inc/layout.php';
        // $layout = ob_get_clean();

        if (file_exists('../app/views/' . $view . '.php')) {
            // ob_start();
            require_once '../app/views/' . $view . '.php';
            // $view = ob_get_clean();
            // echo str_replace('{{view}}', $view, $layout);

        } else {
            die('view file dosent existe!!!!!!!!');
        }
    }
}