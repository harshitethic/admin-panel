<!DOCTYPE html>
<html>
  <head>
    <title>Admin Panel</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <style>
      /* Define colors */
      :root {
        --twitter-blue: #1DA1F2;
        --twitter-blue-light: #E8F5FE;
        --twitter-gray: #657786;
        --twitter-white: #FFFFFF;
      }

      /* Global styles */
      body {
        margin: 0;
        padding: 0;
        font-family: 'Roboto', sans-serif;
      }

      /* Header styles */
      header {
        background-color: var(--twitter-blue);
        color: var(--twitter-white);
        padding: 10px;
      }

      nav ul {
        list-style: none;
        margin: 0;
        padding: 0;
      }

      nav li {
        display: inline-block;
        margin-right: 20px;
      }

      nav li:last-child {
        margin-right: 0;
      }

      nav a {
        color: var(--twitter-white);
        text-decoration: none;
      }

      /* Card styles */
      .card-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
      }

      .card {
        background-color: var(--twitter-white);
        border-radius: 8px;
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);
        padding: 40px;
        text-align: center;
        width: 400px;
      }

      .card h2 {
        color: var(--twitter-gray);
        font-size: 24px;
        margin-bottom: 20px;
      }

      .card p {
        color: var(--twitter-gray);
        font-size: 16px;
        margin-bottom: 40px;
      }

      .buttons {
        display: flex;
        justify-content: center;
      }

      .button {
        background-color: var(--twitter-blue);
        border: none;
        border-radius: 50px;
        color: var(--twitter-white);
        font-size: 18px;
        margin-right: 20px;
        padding: 10px 20px;
        text-decoration: none;
        transition: all 0.3s ease;
      }

      .button:hover {
        background-color: var(--twitter-blue-light);
      }
    </style>
  </head>
  <body>
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
    <div class="card-container">
      <div class="card">
        <h2>Welcome to the Admin Panel</h2>
        <p>Please log in or create an account</p>
        <div class="buttons">
              <a href="login.php" class="button">Log in</a>
          <a href="signup.php" class="button">Create account</a>
        </div>
      </div>
    </div>
   <footer>
  <p>&copy; 2023 Harshitethic</p>
  <style>
    /* Footer styles */
    footer {
      background-color: var(--twitter-blue);
      color: var(--twitter-white);
      padding: 10px;
      text-align: center;
      position: fixed;
      bottom: 0;
      left: 0;
      width: 100%;
    }

    footer p {
      margin: 0;
      font-size: 14px;
    }
  </style>
</footer>
  </body>
</html>