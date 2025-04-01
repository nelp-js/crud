<?php

include 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <table class="table my-5">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Full Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phoddne Number</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql= "select * from crud";
    $result= mysqli_query($conn,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $FullName=$row['FullName'];
            $Email=$row['Email'];
            $PhoneNumber=$row['PhoneNumber'];
            echo ' <tr>
            <th scope="row">'.$id.'</th>
            <td>'.$FullName.'</td>
            <td>'.$Email.'</td>
            <td>'.$PhoneNumber.'</td>
            <td>
            <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
            <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
  </td>
        </tr>';
        }
    }
    ?>  
  </tbody>
</table>
<button class="btn btn-primary"><a href="user.php" class="text-light">Add User</a></button>
    </div>
</body>
</html>