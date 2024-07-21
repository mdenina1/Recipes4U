<?php
  // Database Info
  define('DB_NAME', 'mdenina1');
  define('DB_USER', 'mdenina1');
  define('DB_PASSWORD', 'mdenina1');
  define('DB_HOST', 'localhost');
  // Database Connection
  $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
  if (!$conn) {
    die("Connection Failed: ". mysqli_connect_error());
  }

  // Insert Recipe Function
  function insertRecipe($name, $description, $ingredients, $instructions) {
    global $conn;
    // Prepare SQL statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO recipe_recipes (recipe_name, recipe_description, ingredients, instructions) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $description, $ingredients, $instructions);
    $stmt->execute();
    $stmt->close();
  }

  // Delete Recipe Function
  function deleteRecipe($id) {
    global $conn;
    $stmt = $conn->prepare("DELETE FROM recipe_recipes WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
  }

  // Show Full Recipes
  
  /*
    I DON'T KNOW WHY OR WHERE BUT INSTRUCTIONS AND INGREDIENTS HAVE SWITCHED VALUES DO NOT SWITCH THEM BACK
  */
  function showFullRecipes() {
    global $conn;
    $sql = "SELECT id, recipe_name, recipe_description, instructions, ingredients FROM recipe_recipes";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
        $recipeId = $row['id'];
        echo "<div id='$recipeId' class='recipe'>";
        echo "Recipe Name: " . $row['recipe_name'];
        echo "<br><br>Description: " . $row['recipe_description'];
        echo "<br><br>Ingredients:<br>" . nl2br($row['instructions']);
        echo "<br><br>Instructions:<br>" . nl2br($row['ingredients']);
        echo "<br><br><a href='index.php' id='return'>Return To Top</a>";
        echo "<br><br>";
        if (isset($_COOKIE['recipe_userid'])) {
          echo "<button id='delete' onclick='deleteRecipe($recipeId)'>Delete</button>";
        }
        echo "</div>";

        
        echo "<hr>";
      }
    }
  }

  // Show Recipe Names
  function showRecipeNames() {
    global $conn;
    $sql = "SELECT id, recipe_name FROM recipe_recipes";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
        $recipeId = $row['id'];
        echo "<div id='recipeName' class='recipeBar'>";
        echo "<a href='#$recipeId'>" . $row['id'] . ". ". $row['recipe_name'] . "</a>";
        echo "</div>";
      }
    } else {
      echo "0 results";
    }
  }

  // Process Ajax Requests
  $cmd = $_GET['cmd'] ?? '';
  if ($cmd == 'create') {
      insertRecipe($_GET['name'], $_GET['description'], $_GET['instructions'], $_GET['ingredients']);
      showFullRecipes();
  } elseif ($cmd == 'delete') {
      $id = $_GET['id'];
      deleteRecipe($id);
      showFullRecipes();
  } elseif ($cmd == 'names') {
      showRecipeNames();
  } else {
      showFullRecipes();
  }
  mysqli_close($conn);
?>
