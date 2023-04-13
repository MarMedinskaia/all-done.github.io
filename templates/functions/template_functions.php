<?php

function the_tasks() {

  global $posts;
  
  if ($posts != null) {
    for($i = 0; $i < count($posts); $i++){
      echo ("<div class='post'>
        <div class='datelocation'><p class='date'>Posted: ".$posts[$i]['date']."</p>
        <p class='location'>Location: ".$posts[$i]['location']."</p></div>
        <h3>".$posts[$i]['task']."</h3>
        <p><b>Description:</b> ".$posts[$i]['description']."</p>
        <div class='contactPost'>
        <p>Contact name: ".$posts[$i]['name']."</p>
        <p>Email: ".$posts[$i]['email']."</p>
        <p>Phone: ".$posts[$i]['phone']."</p>
        </div>
      </div>");
    }
  }
}

?>