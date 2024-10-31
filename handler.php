<!DOCTYPE html>
<html>

  <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.deep_orange-light_blue.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <title>Welcome Page</title>
  </head>

  <body>

    <?php
    $username = ""; // Make sure this is the variable you use.
    if (isset($_POST['Username'])) { // Change 'username' to 'Username' (uppercase)
    $username = $_POST['Username']; // Use the same case as in the form
    }
    echo "<h1>Welcome, " . htmlspecialchars($username) . "!</h1>"; // Added htmlspecialchars for safety
    ?>

    <a href="index.html" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
      Go back
    </a>

  </body>

</html>