<?php

    // set default timezone
    date_default_timezone_set("PRC");
    include './SinglePHP.class.php';
    // app config
    $config = array(
        'APP_PATH'    => './App/',
        'DB_HOST'     => '127.0.0.1',
        'DB_PORT'     => '3306',
        'DB_USER'     => 'root',
        'DB_PWD'      => '123456',
        'DB_NAME'     => 'test',
        'DB_CHARSET'  => 'utf8',
        // set default route mode, NORMAL/PATHINFO
        'PATH_MOD'    => 'NORMAL',
        'USE_SESSION' => true,
    );
    SinglePHP::getInstance($config)->run();
