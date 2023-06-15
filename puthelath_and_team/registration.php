<?php
include('db_con.php');
if (isset($_POST['submit'])) {
  $email = $_POST['id'];
  $name = $_POST['email'];
  $course = $_POST['course'];
  $password = $_POST['pass2'];

  $sql = "INSERT INTO `registration` (`email`, `name`, `course`, `password`) VALUES ('$email', '$name', '$course', '$password')";

  if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Successfully registered you can log in now')</script>";
  } else {
    echo "<script>alert('Failed to registered try again')</script>";
  }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>
  <link rel="stylesheet" href="css/sign_up.css">
</head>

<body>
  <div class="header">
    <img src="img/college logo.png" alt="logo" class="lo">
    <h1 class="h1">COURSE LAB</h1>
  </div>
  <div class="contact">

  </div>
  <div class="loginbox">
    <div class="nameof">
      <form name="sign_up" action="" method="post"></form>
      <input type="text" placeholder="Enter your emailid" name="id" required="">
      <input type="text" placeholder="Enter your name" class="br" name="email" required="">

      <div>
        <select id="selection" class="sem" placeholder="select" name="course">
          <option value="web-designing">Web Designing</option>
          <option value="iot">iot</option>
          <option value="artificial-intelligence">artificial-intelligence</option>
      </div>

      <input type="password" placeholder="password " class="pass" name="pass2" required="">
      <button type="submit" name="submit" class="login123">register</button>

</body>

</html>