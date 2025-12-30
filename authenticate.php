<?php
$submitted = isset($_POST['username']) && isset($_POST['password']);
if ($submitted) {
  setcookie('username', $_POST['username']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bookstore</title>
</head>

<body>
  <p>Form submitted? <?php echo (int) $submitted ?></p>
  <?php if ($submitted): ?>
    <p>Your login info is</p>
    <ul>
      <li>username: <?php echo $_POST['username'] ?></li>
      <li>password: <?php echo $_POST['password'] ?></li>
    </ul>
  <?php else: ?>
    <p>You havent submitted anything</p>
  <?php endif ?>
</body>

</html>