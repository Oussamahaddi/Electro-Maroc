
<?php

    // Load config
    require_once 'config/Config.php';

    // load helper
    require_once 'helpers/url_helper.php';
    require_once 'helpers/session_helper.php';

    // autoload core liberaries
    spl_autoload_register(function ($className) {
        require_once 'libraries/' . $className . '.php';
    });
