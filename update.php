<?php
include "connect.php";
$id = $_GET["updateid"];
$sql = "Select * from `crud` where id = $id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row["name"];
$email = $row["email"];
$phone = $row["phone"];
$password = $row["password"];
if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"]; 
    $phone = $_POST["phone"];
    $password = $_POST["password"];

    $sql = "update `crud` set id = $id, name='$name',email='$email',phone='$phone',password='$password' where id = $id";
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
                <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value=<?php echo $name?>>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email:</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value=<?php echo $email?>>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Phone No:</label>
                <input type="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="phone" value=<?php echo $phone?>>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Password:</label>
                <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="password" value=<?php echo $password?>>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>

    </div>
</body>

</html>