<link rel="stylesheet" href="templates/style.css">

<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$posts=[];    

require_once 'database/database.php';
require_once 'templates/functions/template_functions.php';

$pdo = db_connect();   

get_posts();

include 'templates/index.php';

 ?>
