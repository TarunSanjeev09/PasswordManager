<?php include('savepasswords.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
    <h2>Add a new Password</h2>
  </div>
   
  <form method="post" action="addpasswords.php">
   <!--  <?php include('errors.php'); ?> -->
    <div class="input-group">
      <label>Site Name</label>
      <input type="text" name="sitename" >
    </div>
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" >
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="login_user">ADD</button>
    </div>
    <h4>
      Want to see all the saved passwords? <a href="ShowAll.php">click here</a>
    </h4>
  </form>
</body>
</html>