<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./foundation/css/foundation.min.css">
    <link rel="stylesheet" href="./styles.css">
    <script src="./jquery/jquery-3.7.1.min.js"></script>
    <script src="./sweetalert2/sweetalert2.all.min.js"></script>
    <title>Recipes4U</title>
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

    <div id="carousel" class="grid-x">
      <div id="carousel-track" class="cell small-12 medium-12 large-12">
        <img src="images/image1.jpg" alt="Image 1">
        <img src="images/image2.jpg" alt="Image 2">
        <img src="images/image3.jpg" alt="Image 3">
        <img src="images/image4.jpg" alt="Image 4">
        <img src="images/image5.jpg" alt="Image 5">
        <img src="images/image6.jpg" alt="Image 6">
        <img src="images/image7.jpg" alt="Image 7">
        <img src="images/image8.jpg" alt="Image 8">
        <img src="images/image9.jpg" alt="Image 9">
        <img src="images/image10.jpg" alt="Image 10">
        <img src="images/image1.jpg" alt="Image 1">
        <img src="images/image2.jpg" alt="Image 2">
        <img src="images/image3.jpg" alt="Image 3">
        <img src="images/image4.jpg" alt="Image 4">
        <img src="images/image5.jpg" alt="Image 5">
      </div>
    </div>

    <?php 
      if (isset($_COOKIE['recipe_userid'])) {
        echo '<button class="addRecipe">Add Recipe</button>';
      }
    ?>

    <div id="content" class="grid-x">
      <div id="leftBar" class="cell small-2 medium-2 large-2">
        <script>
          function showRecipeNames() {
            $.get("./recipeAjax.php", {"cmd": "names"}, function(data) {
              $("#leftBar").html(data);
            })
          };
          showRecipeNames();
        </script>
      </div>
      <div id="recipeList" class="cell small-10 medium-10 large-10">
        <script>
          function showFullRecipes() {
            $.get("./recipeAjax.php", {"cmd": "showFull"}, function(data) {
              $("#recipeList").html(data);
            });
            return false;
          };
          showFullRecipes();
        </script>
      </div>
    </div>

    <script>
      $('.addRecipe').on('click', function() {
        Swal.fire({
            title: 'Add Recipe',
            html: `
              <div id="recipeForm">
                <form onsubmit="return insertRecipe()">
                  <input type="text" id="recipe_name" placeholder="Name"><br>
                  <textarea id="recipe_description" placeholder="Description"></textarea><br>
                  <textarea id="recipe_ingredients" placeholder="Ingredients"></textarea><br>
                  <textarea id="recipe_instructions" placeholder="Instructions"></textarea><br>
                </form>
              </div>
            `,
            showCancelButton: false,
            focusConfirm: false,
            preConfirm: () => {
              return [
                document.getElementById("recipe_name").value,
                document.getElementById("recipe_description").value,
                document.getElementById("recipe_ingredients").value,
                document.getElementById("recipe_instructions").value,
              ]
            }
        }).then((result) => {
          if (result.isConfirmed) {
            insertRecipe(result.value[0], result.value[1], result.value[2], result.value[3]);
          }
        });
      });

      function insertRecipe(name, description, ingredients, instructions) {
        $.get("./recipeAjax.php", {
          "cmd": "create",
          "name": name,
          "description": description,
          "ingredients": ingredients,
          "instructions": instructions
        }, function(data) {
          $("#recipeList").html(data);
          showRecipeNames();
        });
        return false;
      }

      function deleteRecipe(id) {
        $.get("./recipeAjax.php", {"cmd": "delete", "id": id}, function(data) {
          $("#recipeList").html(data);
          showRecipeNames();
        });
        return false;
      }
    </script>

  </body>
</html>
