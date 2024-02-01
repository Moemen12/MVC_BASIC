<?php
if ($_SERVER['SERVER_NAME'] == 'localhost') {
    /* database config */
    define('DB_NAME', 'my_db');
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');

    define('ROOT', 'http://localhost/mvc/public');
} else {
    /* database config */
    define('DB_NAME', 'my_db');
    define('DB_HOST', 'yourHostName');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');

    define('ROOT', 'https://www.yourwebsite.com');
}
