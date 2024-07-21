Recipes4U
Description
Recipes4U is a recipe sharing and meal planning website designed to allow users to discover, save, and share recipes. The platform provides a variety of recipes, including detailed instructions and ingredients, enabling users to find new dishes to try and manage their meal planning efficiently.

Features
Recipe Management: Users can add new recipes, view detailed recipes, and delete recipes.
Recipe Listings: Recipes are displayed in an organized manner with a sidebar for easy navigation.
User Authentication: Users can log in to access features such as adding and managing recipes.
Responsive Design: The website is designed to be user-friendly and responsive across different devices.
Technologies Used
Frontend:

HTML
CSS (with Foundation framework)
JavaScript (jQuery and SweetAlert2 for interactivity)
Backend:

PHP for server-side scripting
MySQL for database management
Database:

MySQL database to store user and recipe data
Installation
Clone the Repository:

bash
Copy code
git clone https://github.com/mdenina/recipes4u.git
Setup the Database:

Import the provided SQL file (e.g., recipes4u.sql) into your MySQL database.
Configure Database Connection:

Update the DB_NAME, DB_USER, DB_PASSWORD, and DB_HOST constants in recipeAjax.php and other PHP files with your database credentials.
Run the Application:

Place the project files in your web server's root directory (e.g., htdocs for XAMPP).
Access the website via http://localhost/recipes4u/index.php.
Usage
Homepage (index.php): Displays featured recipes and navigation links.
Recipe List (index.php): Lists all recipes with the ability to view details.
Add Recipe: Click the "Add Recipe" button to open a form for submitting new recipes.
Delete Recipe: Recipes can be deleted directly from the recipe list.
Login: Users can log in to manage recipes and access other features.
Checklist
Database Connection: Ensure that database credentials are correctly set.
Add Recipe Functionality: Verify that recipes can be added and displayed correctly.
Delete Recipe Functionality: Ensure recipes can be deleted from the database.
Responsive Design: Test the site on various devices for responsiveness.
User Authentication: Confirm that the login system works as expected.
About
Recipes4U was developed as part of a class project with the goal of creating a functional and user-friendly recipe management system. The project demonstrates proficiency in web development, including database management and user interface design.

License
This project is licensed under the MIT License. See the LICENSE file for details.

Contact
For any inquiries or feedback, please contact [madenina354@gmail.com].
