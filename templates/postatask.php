<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 1);

	require_once('validation.php');  

	validate();
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Post a Task</title>

    <link rel="stylesheet" href="style.css">

    <script src="ideas.js" type="text/javascript"></script>

    <script src="jquery-validation-1.19.3/lib/jquery.js"></script>
    <script src="jquery-validation-1.19.3/dist/jquery.validate.js"></script>

    
    <script>
	  $(document).ready(function(){

      $("form").validate({
        rules: {
          task: {
            required: true
          },
          description: {
            required: true
          },
          name: {
            required: true
          },
          email: {
            required: true,
            email: true
          },
          phone: {
            required: true,
            digits: true,
            maxLength: 12
          }
       
			},
     
      messages: {
          task: {
            required: "Please name your task"
          },
          description: {
            required: "Please describe your task"
			    },
          name: {
            required: "Please provide contact name"
          },
          email: {
            required: "Please provide your email",
            email: "Email is not in the correct format"
          },
          phone: {
            required: "Please provide your phone",
            digits: "Please provide your phone in digit format",
            maxLength: "You phone must be no longer than 12 digits"
          }
		      
      },
		
      errorPlacement: function(error, element) {
          element[0].parentElement.appendChild(error[0]);
      }, 
		
      submitHandler: function(form) {
          form.submit();
      }
	  });
    });
	
	</script>

  </head>

  <body>
    <header>
      <div id="headLeft"></div>
      <a href="index.php"><img src="images/logo.png" alt="Logo of All Done"></a>
      <div id="headRight"></div>
    </header>

    <nav id="headnav">
        <ul>
        <a href="index.php"><li>All Tasks</li></a> 
        <a href="postatask.php"><li>Post a Task</li></a>
        <a href="documentation.html"><li>Documentation</li></a>
        <a href="contact.php"><li>Contacts</li></a>
        </ul>
    </nav>

  <div id="wrapper">
    <h1>Post a Task</h1>
    <p class="description">Fill and submit the form below to get your task posted.</p>

    <div class="write-comment">
      
      <form action="http://localhost/finalproject/postatask.php" method='post' id="postForm"> 
        <h2>New Task</h2>
        <label for="task">
          Task:        
          <input type="text" name="task"> 
          <?php the_validation_message('task'); ?>
        </label>

        <label for="description">
          Task's description:
          <textarea name="description"></textarea>
          <?php the_validation_message("description"); ?>
        </label>

        <label>
          Location:
          <select name="location">
            <option value="unset">unset</option>
            <option value="Downtown">Downtown</option>
            <option value="West End">West End</option>
            <option value="North Vancouver">North Vancouver</option>
            <option value="West Vancouver">West Vancouver</option>
            <option value="Westside">West Side</option>
            <option value="Richmond">Richmond</option>
            <option value="Delta">Delta</option>
            <option value="East Vancouver">East Vancouver</option>
            <option value="Burnaby">Burnaby</option>
            <option value="New Westminster">New Westminster</option>
            <option value="Surrey">Surrey</option>
            <option value="Coquitlam">Coquitlam</option>
            <option value="unset">Other</option>
            <option value="online">Online</option>
          </select>
        </label>

        <label for="name">
          Contact name:
          <input type="text" name="name">
          <?php the_validation_message('name'); ?>
        </label>

        <label for="email">
          Email:
          <input type="text" name="email">
          <?php the_validation_message('email'); ?>
        </label>

        <label for="phone">
          Phone:
          <input type="text" name="phone">
          <?php the_validation_message('phone'); ?>
        </label>
                                              
        <button type="submit" id="buttonPost">Post</button>
      </form>
    </div>

    <div id="ideas">
      <h2>Ideas of Tasks</h2>  
   
      <div id="ideas2">
	        <button id="prev" onclick="prevImage()"><-</button>
	        <figure>
              <img id="langara" src="images/andriyko-podilnyk-VehdYPKnX8Y-unsplash.jpg" width="400" height="270" alt="Walking a dog">
	        </figure>
          <button id="next" onclick="nextImage()">-></button>
      </div>
     
    </div>

  
  </div>

  <footer>
    <nav id="footernav">
        <ul>
         <li><a href="index.php">All Tasks</a></li> 
         <li><a href="postatask.php">Post a Task</a></li>
         <li><a href="documentation.html">Documentation</a></li>
         <li><a href="contact.php">Contacts</a></li> 
        </ul>
    </nav>
    <div>
    <p>Copyright &copy; 2023 Margarita Medinskaia</p>
    </div>
  </footer>
 </body>
</html>
