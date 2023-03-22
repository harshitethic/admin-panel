<!DOCTYPE html>
<html>
  <head>
    <title>Create Account | Admin Panel</title>
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
    <?php
      // Define the filename to use for the user data file
      $filename = 'users.txt';

      // Check if the form was submitted
      if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['confirm_password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        // Check if the username and password meet the required criteria
        if (strlen($username) >= 6 && strlen($password) >= 8 && preg_match('/[A-Za-z]/', $password) && preg_match('/[0-9]/', $password)) {
          // Check if the password and confirm password fields match
          if ($password === $confirm_password) {
            // Hash the password for storage
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Create an array of user data
            $user_data = array(
              'username' => $username,
              'hashed_password' => $hashed_password
            );

            // Encode the user data as JSON
            $user_json = json_encode($user_data);

            // Open the user data file for appending
            $file_handle = fopen($filename, 'a');

            // Write the user data to the file
            fwrite($file_handle, $user_json . "\n");

            // Close the file handle
            fclose($file_handle);

            // Redirect the user to the login page
            header('Location: login.php');
            exit;
          } else {
            $message = 'Passwords do not match';
          }
        } else {
          $message = 'Username or password does not meet requirements';
        }
      }
    ?>
    <form action="signup.php" method="post">
      <h2>Create account</h2>
      <?php if (!empty($message)) { ?>
        <p><?php echo $message; ?></p>
      <?php } ?>
      <label for="username">Username:</label>
      <input type="text" name="username" id="username" required>
      <label for="password">Password:</label>
      <input type="password" name="password" id="password" required>
      <label for="confirm_password">Confirm password:</label>
      <input type="password" name="confirm_password" id="confirm_password" required>
      <button type="submit">Create account</button>
    </form>
    <?php include('footer.php'); ?>
  </body>
</html>

