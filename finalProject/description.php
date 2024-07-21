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
    <title>Information - Recipes4U</title>
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
        <h1>Site Description</h1>
        <p><strong>Who are the users of this site?</strong><br>
        The users of Recipes4U are home cooks, food enthusiasts, and anyone looking for new recipes or meal planning ideas. Our site caters to individuals who enjoy cooking and want to explore, share, and organize their favorite recipes.</p>
        
        <p><strong>What do we want our users to get out of using the site?</strong><br>
        We aim to provide users with a convenient platform to discover a variety of recipes, create their own, and manage their meal plans effortlessly. The goal is to inspire creativity in the kitchen and make meal planning easier and more enjoyable.</p>
        
        <p><strong>What problem are we trying to solve for our users?</strong><br>
        We are addressing the challenge of finding and organizing recipes. Users often struggle with managing their favorite recipes and meal plans. Recipes4U simplifies this by offering an intuitive interface for recipe discovery, storage, and planning, ensuring users can easily access and organize their culinary ideas.</p>
        
        <p><strong>What actions do we want users to take once they have used our site?</strong><br>
        After using our site, we encourage users to actively add their own recipes, engage with the recipe community, and utilize the meal planning features. We hope users will regularly return to explore new recipes, contribute their own, and use the platform as a valuable resource for their cooking needs.</p>
      </div>
    </div>
  </body>
</html>
