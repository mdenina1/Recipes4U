<?php
  // Database Connection
  define('DB_NAME', 'mdenina1');
  define('DB_USER', 'mdenina1');
  define('DB_PASSWORD', 'mdenina1');
  define('DB_HOST', 'localhost');
  $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
  if (!$conn) {
    die("Connection Failed: ". mysqli_connect_error());
  }

  if (isset($_POST['submit'])) {
    $username = $_POST['user'];
    $password = $_POST['pass'];
    $sql = "SELECT * FROM recipe_users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result); 
    
    if ($count == 1) {
      setcookie("recipe_userid", $row["id"], time() + (86400 * 30), "/");
      header("Location: index.php");
    } else {
      setcookie('recipe_userid', "", time() - 3600, "/");
      echo '<script>
        window.location.href = "login.php";
        alert("Login Failed. Invalid username or password.")
      </script>';
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Login</title>
</head>
<body>
  <div class="login-container">
    <div class="login-form">
      <form method="post">
        <h2>Recipes4U Login</h2>
        <input type="text" name="user" placeholder="Username" required><br>
        <input type="password" name="pass" placeholder="Password" required><br>
        <input type="submit" name="submit" value="Login">
      </form>
    </div>
  </div>
</body>
</html>
