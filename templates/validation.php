<?php

$valid = false;

$val_messages = Array();


function validate()
{
    global $valid;
    global $val_messages;

    if($_SERVER['REQUEST_METHOD'] == 'post')
    {
      $email = '#^(.+)@([^\.].*)\.([a-z]{2,})$#';
      $phone = "#^[+1]?[2][0-9]{9}$#";

      if (preg_match($email, $_POST['email']) == false) {
          $_POST['email'] = null;
      }
      if (preg_match($phone, $_POST['phone']) == false) {
          $_POST['phone'] = null;
      }

      if ($_POST['email'] != null && $_POST['phone'] != null) {
        if ($_POST['task'] != null && $_POST['description'] != null && $_POST['name'] != null) {
          $valid = true;
        }
      } else {
          $valid = false;
      }       
    }
}


function the_validation_message($type) {

  global $val_messages;

  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    $val_messages = array("task"=>"Task name must be in text format", "description"=>"Please describe your task in text format", 
    "name"=>"Please provide your name in text format", "email"=>"Email is not in correct format", "phone"=>"Phone is not in correct format");
    
    if ($_POST[$type] == null) {
        echo("<p class='failure-message'>".$val_messages[$type]."</p>");
    } else {
        return;
    }

  }
}

