<header>
  <nav>
    <ul>
      <li><a href="index.php">Home</a></li>
      <?php if (isset($_SESSION['username'])) { ?>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="change.php">Change username or password</a></li>
        <li><a href="logout.php">Log out</a></li>
      <?php } else { ?>
        <li><a href="login.php">Log in</a></li>
        <li><a href="signup.php">Create account</a></li>
      <?php } ?>
    </ul>
  </nav>
</header>
