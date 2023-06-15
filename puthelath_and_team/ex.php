<?php
include('db_con.php');
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $course = $_POST['course'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `registration` (`email`, `name`, `course`, `password`) VALUES ('$email', '$name', '$course', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>if(confirm('Registered! Now select the course')){document.location.href='https://telegram.me/+JW_jIxApF51kZGU1'};</script>";
    } else {
        echo "<script>alert('Failed to registered try again')</script>";
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Registeration form</title>
    <style>
        .top {
            margin-top: 2rem;
        }
        .header{
    height: 155px;
    /* left: -36px; */
    /* top: -23px; */
    background: #03A59B;
}
.h1{
    margin-top: -79px;
    /* DISPLAY: inline-block; */
    MARGIN-LEFT: 195PX;
    width: 766px;
    height: 137px;
    left: 65px;
    top: 450px;
    font-weight: 700;
    font-size: 45px;
    line-height: 56px;
    letter-spacing: -0.065em;
    color: #FFFFFF;
}


    </style>
</head>

<body>



<div class="header">
        <img src="img/college logo.png" alt="logo" class="lo">
        <h1  class="h1">COURSE LAB</h1>
    </div>









    <main class="d-flex justify-content-center align-items-center top">
        <div style="width:35rem;" class="card p-3">
            <h2 class="text-muted text-center">Registeration form</h2>
            <form action="" method="post">
               ` <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>`

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="col-md-4">
                    <label for="inputState" class="form-label">Course</label>
                    <select name="course" class="form-select" required>
                        <option value="WEBDESIGING">WEBDESIGING</option>
                        <option value="IOT">IOT</option>
                        <option value="ARTIFICIAL INTELLIGENCE">ARTIFICIAL INTELLIGENCE</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="items" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>

                <div class="mb-3 d-grid">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

        </div>
    </main>
</body>

</html>