<?php

  require 'config.php';

  if(isset($_POST['submit'])) {
    $patientName = $_POST["patientName"];
    $dateOfBirth = $_POST["dateOfBirth"];
    $age = $_POST["age"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $state = $_POST["state"];
  
  // sql to insert a record
  $sql = "INSERT INTO `patientdetails` (`patientName`, `dateOfBirth`, `age`, `address`, `city`, `state`) VALUES ('$patientName', '$dateOfBirth', '$age', '$address', '$city', '$state')";

  $result = $conn->query($sql);

  if($result == TRUE) {
    echo 'New record created successfully';
    header("Location: view.php");
  } else {
    echo 'Error: ' . $sql . $conn->error;
  }

  $conn->close();
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Add New Patient</title>
</head>
<body>
  <div class="container mt-3">
    <h2>Add New Patient</h2>

    <form action="" method="post">
      <fieldset>
        <legend>Patient Information:</legend>
        <div class="mb-3 mt-3">
          <label for="name" class="form-label">Name:</label>
          <input type="text" name="patientName" class="form-control" id="name" placeholder="Enter Full Name" />
         </div>
         <div class="mb-3">
          <label for="dateOfBirth" class="form-label">Date of Birth:</label>
          <input type="date" name="dateOfBirth" class="form-control" id="dateOfBirth"/>
        </div>
        <div class="mb-3">
          <label for="age" class="form-label">Age:</label>
          <input type="number" name="age" class="form-control" id="age" placeholder="Enter Age" />
        </div>
        <div class="mb-3">
          <label for="address" class="form-label">Address:</label>
          <input type="text" name="address" class="form-control" id="address" placeholder="Enter Address" />
        </div>
        <div class="mb-3">
          <label for="city" class="form-label">City:</label>
          <input type="text" name="city" class="form-control" id="city" placeholder="Enter City" />
        </div>
        <div class="mb-3">
          <label for="state" class="form-label">State:</label>
          <input type="text" name="state" class="form-control" id="state" placeholder="Enter State" />
        </div>
        <input type="submit" value="Add" name="submit"  class="btn btn-primary" />
      </fieldset>
    </form>
  </div>
</body>
</html>