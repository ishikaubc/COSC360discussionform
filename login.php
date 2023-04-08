
<?php

$is_invalid = false;
if($_SERVER["REQUEST_METHOD"] === "POST") {
    $mysqli = require __DIR__ . "/database.php";

    $sql = sprintf("SELECT * FROM user
                    WHERE email = '%s'",
                    $mysqli->real_escape_string($_POST["email"]));

   $result = $mysqli->query($sql);

   $user = $result->fetch_assoc();

   if($user) {
   if( password_verify($_POST["password"], $user["password_hash"])) {
        session_start();

        session_regenerate_id();

        $_SESSION["user_id"] = $user["id"];

        header("Location: index.php");
        exit;

   }
   
   }
   $is_invalid = true;
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Login </title>
    <?php if ($is_invalid): ?>
        <em>Invalid Login</em>
    <?php endif; ?>
    <meta charset = "UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
  </head>
  <body>
    <h1>Login</h1>
    <form method = "post">
        <label for = "email">email</label>
        <input type = "email" name="email" id="email"
             value = "<?= htmlspecialchars($_POST["email"])??""?>">

        <label for= "password">Password</label>
        <input type ="password" name="password" id="password">

     </form>
</body>
</html>

  