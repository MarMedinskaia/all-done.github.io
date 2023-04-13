<link rel="stylesheet" href="templates/style.css">

<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$requests = [];    

require_once 'database/database.php';
require_once 'templates/functions/template_functions.php';

$pdo = db_connect();   

submit_request();

include 'templates/contact.php';

 ?>