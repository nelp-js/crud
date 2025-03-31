<?php
include 'connect.php';


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $FullName = $_POST['FullName'];
    $Email = $_POST['Email'];
    $PhoneNumber = $_POST['PhoneNumber'];

    $sql = "INSERT INTO crud (FullName, Email, PhoneNumber) VALUES ('$FullName', '$Email', '$PhoneNumber')";
    
    if (mysqli_query($conn, $sql)) {
        echo "Data inserted successfully.";
        header('location:display.php');
        exit();
    } else {
        die("Query failed: " . mysqli_error($conn));
    }
}
?>





<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRUD</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container my-5">
    <form method="post">
      <div class="mb-3">
        <label>Full Name</label>
        <input type="text" name="FullName" class="form-control" placeholder="Enter Full Name" autocomplete="off">
      </div>
      <div class="mb-3">
        <label>Email</label>
        <input type="email" name="Email" class="form-control" placeholder="Enter Email" autocomplete="off">
      </div>
      <div class="mb-3">
        <label>Phone Number</label>
        <input type="text" name="PhoneNumber" class="form-control" placeholder="Enter Number" autocomplete="off">
      </div>
      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
  </div>
</body>
</html>
