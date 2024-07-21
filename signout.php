<?php
  setcookie('recipe_userid', "", time() - 3600, "/");
  echo '<script>
    window.location.href = "index.php";
    alert("Signed out successfully.")
  </script>';
?>