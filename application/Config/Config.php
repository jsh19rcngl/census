<?php

    define('FOLDER_PATH', '/Projects/a-v2/');
    define('VIEW_PATH', '/Projects/a-v2/application/View/');
    define('CONTROLLER_PATH', '/Projects/a-v2/application/Controller/');
    define('SYSTEM_PATH', '/Projects/a-v2/system/');
    define('WEB_ENGINE', '/Projects/a-v2/system/webengine/');
    define('LIBRARIES', '/Projects/a-v2/application/Library/');
    define('MODEL', '/Projects/a-v2/application/Model/');
    define('ACCESS_LOG', '/Projects/a-v2/system/access_log/');
    

    define('CHECK_SESSION', TRUE);
    //      variable                    controller
    define('REDIRECT_SESSION_PAGE_TO', 'login/showLogin');
    //session variable to check
    define('CHECK_SESSION_VARIABLE', TRUE);
    define('SESSION_VAR' , 'user_login');

    //DEFAULT TENPLATE
    define('TEMPLATE', 'template/template.php');

    define('ALWAYS_RENDER_TO_TEMPLATE' , FALSE);
    

    
    


    define('DB_HOSTNAME', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'census_db');
?>