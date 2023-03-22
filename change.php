<?php
// Start the session
session_start();

// Check if user is not logged in
if (!isset($_SESSION['username'])) {
  header('Location: login.php');
  exit();
}

// Get the user's current username and password from the session
$current_username = $_SESSION['username'];
$current_password = $_SESSION['password'];

// If the form has been submitted, update the username and/or password
if (isset($_POST['submit'])) {
  // Get the new username and password from the form
  $new_username = $_POST['username'];
  $new_password = $_POST['password'];

  // Validate the new username and password
  // ...

  // Update the user's information in the database
  // ...
  
  // Update the session variable with the new username and password
  $_SESSION['username'] = $new_username;
  $_SESSION['password'] = $new_password;

  // Redirect the user to the dashboard page
  header('Location: dashboard.php');
  exit();
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Admin Panel - Change username or password</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <style>
      /* Your color scheme here */
    </style>
  </head>
  <body>
    <?php include('header.php'); ?>
    <h1>Change username or password</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <label for="username">New username:</label>
      <input type="text" name="username" id="username" value="<?php echo $current_username; ?>">
      <label for="password">New password:</label>
      <input type="password" name="password" id="password" value="<?php echo $current_password; ?>">
      <input type="submit" name="submit" value="Save changes">
    </form>
    <?php include('footer.php'); ?>
  </body>
</html>
