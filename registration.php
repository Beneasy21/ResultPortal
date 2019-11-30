<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <div class="header">
    <h2>Register</h2>
  </div>
  
  <form method="post" action="registration.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" value="<?php echo $username; ?>">
    </div>
    <div class="input-group">
      <label>Email</label>
      <input type="email" name="email" value="<?php echo $email; ?>">
    </div>
    <div class="input-group">
      <label>Class</label>
      <select class="input-group" name="logclass" value="<?php echo $Class; ?>">
        <Option></Option>
        <Option>JSS 1</Option>
        <Option>JSS 2</Option>
        <Option>JSS 3</Option>
        <Option>SSS 1 Humanities </Option>
        <Option>SSS 2 Humanities </Option>
        <Option>SSS 3 Humanities </Option>
        <Option>SSS 1 Science </Option>
        <Option>SSS 2 Science </Option>
        <Option>SSS 3 Science </Option>
        <Option>SSS 1 Technology </Option>
        <Option>SSS 2 Technology </Option>
        <Option>SSS 3 Technology </Option>
        <Option>SSS 1 Business </Option>
        <Option>SSS 2 Business </Option>
        <Option>SSS 3 Business </Option>
        
      </select>
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password_1">
    </div>
    <div class="input-group">
      <label>Confirm password</label>
      <input type="password" name="password_2">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="reg_user">Register</button>
    </div>
    <p>
      Already a member? <a href="loginn.php">Sign in</a>
    </p>
  </form>
</body>
</html>