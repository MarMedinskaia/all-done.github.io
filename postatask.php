<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

    <link rel="stylesheet" href="templates/style.css">
    <script src="templates/ideas.js" type="text/javascript"></script>

    <title>Home</title>
</head>
  <body>
</body>
</html>

<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

$posts = [];    

require_once 'database/database.php';
require_once 'templates/functions/template_functions.php';

$pdo = db_connect();  

submit_post();

get_posts();


include 'templates/postatask.php';

 ?>
