<!DOCTYPE html>
<html>
  <head>
    <title>Log in | Admin Panel</title>
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

      /* Form styles */
      form {
        background-color: var(--twitter-white);
        border-radius: 8px;
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);
        margin: 40px auto;
        max-width: 400px;
        padding: 40px;
      }

      form h2 {
        color: var(--twitter-gray);
        font-size: 24px;
        margin-bottom: 20px;
      }

      form label {
        color: var(--twitter-gray);
        display: block;
        font-size: 16px;
        margin-bottom: 10px;
      }

      form input[type="text"],
      form input[type="password"] {
        border: 1px solid var(--twitter-gray);
        border-radius: 4px;
        font-size: 16px;
        padding: 8px;
        width: 100%;
      }

      form button {
        background-color: var(--twitter-blue);
        border: none;
        border-radius: 50px;
        color: var(--twitter-white);
        font-size: 18px;
        margin-top: 20px;
        padding: 10px 20px;
        text-decoration: none;
        transition: all 0.3s ease;
      }

      form button:hover {
        background-color: var(--twitter-blue-light);
      }

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
  </head>
  <body>
    <?php include('header.php'); ?>
    <form action="login.php" method="post">
      <h2>Log in</h2>
      <?php if (!empty($message)) { ?>
        <p><?php echo $message; ?></p>
      <?php } ?>
      <label for="username">Username:</label>
      <input type="text" name="username" id="username" required>
      <label for="password">Password:</label>
      <input type="password" name="password" id="password" required>
      <button type="submit">Log in</button>
    </form>
    <?php include('footer.php'); ?>
  </body>
</html>
