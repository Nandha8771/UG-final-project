<html>
  <head>
    <link rel="stylesheet" href="style.css">
    <title>SKC-HMS</title>
  </head>
<body>
  <div class="wrapper">
    <section class="form login">
      <header>SKC-HMS</header>
      <form action="update.php" method="POST">
        <div class="field input">
          <label>Username</label>
          <input type="text" name="name" placeholder="Username" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="pass" placeholder="Password" required>
        </div>
        <div class="field button">
          <input type="submit" name="login" value="Log-in">
        </div>
      </form>
      <div class="link">Not yet signed up? <a href="index.php">Signup now</a></div>
    </section>
  </div>
</body>
</html>
