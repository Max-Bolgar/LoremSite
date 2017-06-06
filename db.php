<?php 
require "libs/redBean/rb.php";
R::setup( 'mysql:host=127.0.0.1;port=3306;dbname=lorem_users',
        'root', '' ); //for both mysql or mariaDB

session_start();
        ?>