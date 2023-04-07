
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST"){
  $mysqli = require __DIR__ ."/database.php";

  $sql = "SELECT * FROM user
         WHERE email = '%s'";

}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Signup </title>
    <meta charset = "UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
  </head>
  <body>
    <h1>Login</h1>

    <form method="post">
        <label for="email">email</label>
        <input type = "email" name = "email" id="email">
   
    <label for="password">password</label>
    <input type = "password" name = "password" id="password">
    
    <button>Log In</button>
</form>
