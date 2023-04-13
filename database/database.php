<?php

function db_connect() {
  require 'config.php';

  try {
    $connectionString = 'mysql:host='.DBHOST.';dbname='.DBNAME;
    $user = DBUSER; $pass = DBPASS;
    $pdo = new PDO($connectionString, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    return $pdo;
  }
  catch (PDOException $e)
  {
    die($e->getMessage());
  }
}


function submit_post() {   
  global $pdo;

  if($_SERVER["REQUEST_METHOD"] == 'POST')
  {
   
    if (isset($_POST['task']) && isset($_POST['description']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone'])) {
      $sql = 'INSERT INTO posts (date, task, description, location, name, email, phone) VALUES (:date, :task, :description, :location, :name, :email, :phone)'; 
      $statement = $pdo->prepare($sql);
      $statement->bindValue(':date', date('Y-m-d'));
      $statement->bindValue(':task', $_POST['task']); 	
      $statement->bindValue(':description', $_POST['description']);  
      $statement->bindValue(':location', $_POST['location']); 
	    $statement->bindValue(':name', $_POST['name']);  
      $statement->bindValue(':email', $_POST['email']);    
      $statement->bindValue(':phone', $_POST['phone']);
      $statement->execute();    
      
    }  
  }
}


function get_posts() {
  global $pdo;
  global $posts;
                  
  $sql = 'SELECT * FROM posts ORDER BY ID DESC';
  $result = $pdo->query($sql);
  if ($result != null) {
    while ($row = $result->fetch()) {
      array_push($posts, $row);
    }
  }
  
}


// Handle form submission for Contact requests
function submit_request() {   
  global $pdo;

  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
      $sql = 'INSERT INTO requests (reason, name, email, message) VALUES (:reason, :name, :email, :message)'; 
      $statement = $pdo->prepare($sql);
      $statement->bindValue(':reason', $_POST['reason']); 	
      $statement->bindValue(':name', $_POST['name']);  
      $statement->bindValue(':email', $_POST['email']);  
	    $statement->bindValue(':message', $_POST['message']);  
      $statement->execute();    
    }  
  }
}
