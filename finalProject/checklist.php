<?php
  define('DB_NAME', 'mdenina1');
  define('DB_USER', 'mdenina1');
  define('DB_PASSWORD', 'mdenina1');
  define('DB_HOST', 'localhost');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checklist - Recipes4U</title>
    <link rel="stylesheet" href="./foundation/css/foundation.min.css">
    <link rel="stylesheet" href="./styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background: linear-gradient(to bottom, #c6f0c6, #e8f5e9); /* Green gradient background */
            color: #212121;
        }

        h1 {
            color: #4caf50;
        }

        .checklist {
            margin: 20px 0;
        }

        .checklist-item {
            margin: 10px 0;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #fff;
        }

        .checklist-item span {
            font-weight: bold;
        }

        .checklist-item ul {
            margin: 10px 0;
            padding-left: 20px;
        }

        .top-bar {
            font-family: Roboto;
            background-color: #4caf50;
            color: #ffffff;
        }

        .top-bar-left, .top-bar-right {
            display: flex;
            align-items: center;
        }

        .menu {
            display: flex;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .menu li {
            margin: 0 10px;
        }

        .menu li a {
            color: #ffffff;
            text-decoration: none;
        }

        .menu li a:hover {
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
    </div>

    <h1>Project Checklist</h1>
    <div class="checklist">
        <div class="checklist-item">
            <span>Database Usage:</span>
            <ul>
                <li>Connected to MySQL database (mdenina1).</li>
                <li>Database operations include creating, reading, updating, and deleting recipes.</li>
            </ul>
        </div>

        <div class="checklist-item">
            <span>Ajax Usage:</span>
            <ul>
                <li>Used to fetch and display recipes from the database.</li>
                <li>Used to add new recipes without refreshing the page.</li>
                <li>Used to delete recipes from the list dynamically.</li>
            </ul>
        </div>

        <div class="checklist-item">
            <span>Consistent Theme:</span>
            <ul>
                <li>Website uses a green color scheme matching the navigation bar.</li>
                <li>Consistent font usage (Arial, sans-serif for body, Roboto for navigation).</li>
                <li>Buttons have a consistent style across the site.</li>
            </ul>
        </div>

        <div class="checklist-item">
            <span>New Library or Site Integration:</span>
            <ul>
                <li>Integrated SweetAlert2 for pop-up modals.</li>
                <li>Used jQuery for Ajax requests and dynamic content updates.</li>
            </ul>
        </div>

        <div class="checklist-item">
            <span>JavaScript Usage:</span>
            <ul>
                <li>Implemented AJAX for dynamic content updates.</li>
                <li>JavaScript used to handle form submissions and modal interactions.</li>
            </ul>
        </div>

        <div class="checklist-item">
            <span>Membership Area:</span>
            <ul>
                <li>Login functionality to access additional features.</li>
                <li>Cookies used to manage user sessions.</li>
            </ul>
        </div>
    </div>
</body>
</html>
