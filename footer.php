<footer>
  <p>Copyright &copy; <?php echo date('Y'); ?> Admin Panel
    <?php if (isset($_SESSION['username'])) { ?>
      | Logged in as <?php echo $_SESSION['username']; ?>
    <?php } ?>
  </p>
</footer>
