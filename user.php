<?php
include "connect.php";
if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"]; 
    $phone = $_POST["phone"];
    $password = $_POST["password"];

    $sql = "insert into `crud` (name, email, phone, password) values('$name', '$ema il', '$phone', '$password')";
    $result = mysqli_query($con, $sql);
    if($result){
        header("location:display.php");
    } else{
        die (mysqli_error($con));
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name:</label>
                <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email:</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Phone No:</label>
                <input type="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="phone">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Password:</label>
                <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="password">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>

    </div>
</body>

</html>