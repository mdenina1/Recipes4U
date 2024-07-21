<?php
  define('DB_NAME', 'mdenina1');
  define('DB_USER', 'mdenina1');
  define('DB_PASSWORD', 'mdenina1');
  define('DB_HOST', 'localhost');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="./jquery/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="./foundation/css/foundation.min.css">
    <link rel="stylesheet" href="./styles.css">
    <title>About Us - Recipes4U</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 10px;
        background-color: #f5f5f5;
        color: #212121;
      }

      .top-bar {
        font-family: Roboto, sans-serif;
        background-color: #4caf50;
      }

      .top-bar .menu {
        background-color: #4caf50;
        font-size: 20px;
        color: #ffffff;
      }

      .top-bar .menu li a {
        font-family: Roboto, sans-serif;
        font-size: 20px;
        color: #ffffff;
      }

      #content {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        padding: 20px;
        background: linear-gradient(to bottom right, #e2f3e2, #ffffff); /* Light green gradient */
      }

      .cell {
        background-color: #ffffff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        max-width: 800px;
        width: 100%;
      }

      h1 {
        font-size: 2em;
        color: #4caf50;
        margin-bottom: 10px;
      }

      h2 {
        font-size: 1.5em;
        color: #4caf50;
        margin-top: 20px;
        margin-bottom: 10px;
      }

      p {
        font-size: 1.1em;
        line-height: 1.6;
        margin-bottom: 15px;
        color: #333;
      }

      a {
        color: #4caf50;
        text-decoration: none;
      }

      a:hover {
        text-decoration: underline;
      }
    </style>
  </head>
  <body>
    <div class="top-bar">
      <div class="top-bar-left">
        <ul class="menu">
          <li class="menu-text">Recipes4U</li>
          <li><a href="index.php">Home</a></li>
          <li><a href="description.php">Information</a></li>
          <li><a href="checklist.php">Checklist</a></li>
          <li><a href="aboutUs.php">About Us</a></li>
        </ul>
      </div>
      <div class="top-bar-right">
        <ul class="menu">
          <?php 
            if (!isset($_COOKIE['recipe_userid'])) {
              echo '<li><a href="login.php" id="openLoginForm">Login</a></li>';
            } else {
              echo '<li><a href="signout.php">Sign Out</a></li>';
            }
          ?>
        </ul>
      </div>
    </div>

    <div id="content" class="grid-x">
      <div class="cell small-12 medium-12 large-12">
        <h1>About Us</h1>

        <h2>Section 1 – About Who You Are</h2>
        <p>Hello! I am Mark Denina. My want to improve in web programming and interest in learning how to cook has led me to creating this webpage.</p>
        
        <h2>Section 2 – Project Description and Why You Chose This Project</h2>
        <p>This project, Recipes4U, is a recipe sharing and meal planning website designed to help users discover, share, and organize their favorite recipes. I chose this project because it combines my interest in web development with my love for cooking. It provides a practical application for my skills and offers value to users who want to streamline their meal planning process.</p>
        
        <h2>Section 3 – Description of Technology Used for Your Site</h2>
        <p>Recipes4U is built using a combination of HTML, CSS, and JavaScript for the frontend, and PHP with MySQL for the backend. The site uses AJAX for asynchronous data retrieval, enhancing the user experience by allowing dynamic content updates without reloading the page. The CSS framework Foundation is used for responsive design, and jQuery simplifies DOM manipulation and event handling.</p>
        
        <h2>Section 4 – What You Have Learned in This Class</h2>
        <p>In this class, I have learned the fundamentals of web development, including the creation of responsive layouts, user interface design, and server-side scripting with PHP. I have also gained experience in working with databases, managing user authentication, and implementing AJAX for dynamic content updates. These skills have been invaluable in developing this project and will continue to benefit me in future web development endeavors.</p>
      </div>
    </div>
  </body>
</html>
