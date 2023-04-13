<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Home</title>

    <link rel="stylesheet" href="style.css">

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
    <h1>All Tasks</h1>
    <p class="description">Help your neighbors in Vancouver with their errands</h2>

      <div class="alltasks">

        <?php
          the_tasks();  
        ?>
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

    