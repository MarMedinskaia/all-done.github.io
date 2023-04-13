<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 1);

	require_once('validation.php');  

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Contacts</title>

    <link rel="stylesheet" href="style.css">

    <script src="jquery-validation-1.19.3/lib/jquery.js"></script>
    <script src="jquery-validation-1.19.3/dist/jquery.validate.js"></script>
    <script type="text/javascript">
      function submission() {
        alert("Thank you! We will get back to you very soon!");
      }
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
    <h1>Contacts</h1>
    <p class="description">You can reach us by email and phone, or by filling the contact form.</p>
    <div id="contacts">
      <div>
        <h3>Email: <a href="mailto:mar.medinskaia@gmail.com">mar.medinskaia@gmail.com</a></h3>
        <h3>Phone: <a href="tel:+1236-513-1339">+1 (236) 513-13-39</a></h3>
      </div>
    
      
        <form action="http://localhost/finalproject/contact.php" method="post" id="contactForm" onSubmit="submission()"> 
          <h2>Contact Form</h2>
          <label>
            Reason:
            <select name="reason">
              <option value="suggestion">suggestion</option>
              <option value="techproblem">technical problem</option>
              <option value="cooperation">co-operation</option>
              <option value="genquestion">general question</option>
              <option value="other">other</option>
            </select>
          </label>

          <label for="name">
            Name:        
            <input type="text" name="name"> 
          </label>

          <label for="email">
            Email:        
            <input type="text" name="email"> 
          </label>

          <label for="phone">
            Phone:        
            <input type="text" name="phone"> 
          </label>

          <label for="message">
            Message:
            <textarea name="message"></textarea>
          </label>
                                                  
          <button type="submit" id="buttonCont">Submit</button>

        </form>
    
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