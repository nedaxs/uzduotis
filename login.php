<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/login-form.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <title>Admin login</title>
</head>
<body>
    <div id="login-form">
    <h1>Login</h1>
    <div>
    <form action="login.php" method="post">
    <div class="mb-3">
    <label for="username">Slapyvardis:</label>
    <input type="text" id="username" name="username" required>
    </div>
    <div class="mb-3">
    <label for="password">Slaptažodis:</label>
    <input type="password" id="password" name="password" required>
    </div>
    <input type="submit" value="Login" class="btn btn-outline-success">
</div>
</div>
  </form>

<?php


  $conn = mysqli_connect("127.0.0.1", "root", "", "riedlente");

  // Įvedimas
  $username = $_POST['username'];
  $password = $_POST['password'];

  // SQL
  $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";


  $result = mysqli_query($conn, $query);

  $user = mysqli_fetch_assoc($result);

  // OK, redirect į admin.php
  if ($user) {
    session_start();
    $_SESSION['logged_in'] = true;
    $_SESSION['user'] = $user;
    header("Location: admin.php");
  } else {
    // ERROR
    echo '<div class="klaida">Neteisingas vartotojas arba slaptažodis. Bandykite iš naujo</div>';
  }
?>


</body>
</html>