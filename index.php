<html>
  <head>
    <link rel="stylesheet" href="style.css">
  </head>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header>SKC-HMS</header>
      <form action="update.php" method="POST">
          <div class="field input">
            <label>Username</label>
            <input type="text" name="name" placeholder="Username" required>
          </div>
        <div class="field input">
          <label>Password</label>
          <input type="text" name="pass" placeholder="Password" required>
        </div>
        <div class="field input">
          <label>Confirm Password</label>
          <input type="password" name="conpass" placeholder="Confirm Password" required>
        </div>
        <div class="field button">
          <input type="submit" name="signup" value="Create User">
        </div>
      </form>
      <div class="link">Already signed up? <a href="login.php">Login now</a></div>
    </section>
  </div>
</body>
</html>
