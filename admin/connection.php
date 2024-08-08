<?php
   define('DB_SERVER', 'host');
   define('DB_USERNAME', 'username');
   define('DB_PASSWORD', 'password');
   define('DB_DATABASE', 'database_name');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>

<?php
        $dbHost = 'host';
        $dbUser = 'username';
        $dbPass = 'password';
        $dbName = 'database_name';
        $connection = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
?>
