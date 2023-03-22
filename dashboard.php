<!DOCTYPE html>
<html>
  <head>
    <title>Admin Panel - Dashboard</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <style>
      /* Your color scheme here */
    </style>
  </head>
  <body>
    <?php include('header.php'); ?>
    <h1>Dashboard</h1>
    <p>Welcome, <?php echo $_SESSION['username']; ?></p>
    <p>Here is your dashboard content</p>
    <a href="change.php">Change username or password</a>
    <?php include('footer.php'); ?>
  </body>
</html>
