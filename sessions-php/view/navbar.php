<nav class="navbar">
      <a class="<?= basename($_SERVER['REQUEST_URI']) == "index.php" ? "selected" : ""; ?>" href="index.php">Hem</a>
      <a class="<?= basename($_SERVER['REQUEST_URI']) == "about.php" ? "selected" : ""; ?>" href="about.php">Om</a>
      <a class="<?= basename($_SERVER['REQUEST_URI']) == "redovisning.php" ? "selected" : ""; ?>" href="redovisning.php">Redovisning</a>
      <a class="<?= basename($_SERVER['REQUEST_URI']) == "multipage.php" ? "selected" : ""; ?>" href="multipage.php">Multisida</a>
      <a class="<?= basename($_SERVER['REQUEST_URI']) == "session.php" ? "selected" : ""; ?>" href="session.php">Session</a>
      <a class="<?= basename($_SERVER['REQUEST_URI']) == "login.php" ? "selected" : ""; ?>" href="login.php">Login</a>
</nav>
