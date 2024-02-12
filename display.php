<?php
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a class="text-light" href="user.php">Add User</a></button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Sr.no</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Password</th>
                    <th scope="col">Contorls</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "Select * from `crud`";
                $result = mysqli_query($con, $sql);
                    $i = 1;
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row["id"];
                            $name = $row["name"];
                            $email = $row["email"];
                            $phone = $row["phone"];
                            $password = $row["password"];

                        echo '
                        <tr>
                            <th scope="row">'.$i ++.'</th>
                            <td>'.$name.'</td>
                            <td>'.$email.'</td>
                            <td>'.$phone.'</td>
                            <td>'.$password.'</td>  
                            <td>
                            <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
                            <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button></td>  
                            
                        </tr>
                            ';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>