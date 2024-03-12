<html>
<body>
<form method="post"> <!-- Form to submit user's name -->
    Name: <input type="text" name="name"><br> <!-- Input field for user's name -->
    <input type="submit"> <!-- Submit button -->
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { // Check if form is submitted using POST method
    $name = $_POST["name"]; // Retrieve user's name from the submitted form
    echo "Hello, " . $name . "!"; // Display a greeting message with the user's name
}
?>
</body>
</html>
