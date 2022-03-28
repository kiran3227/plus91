<?php

  include "config.php";

  if(isset($_POST['update'])) {
    $id = $_POST["id"];
    $patientName = $_POST["patientName"];
    $dateOfBirth = $_POST["dateOfBirth"];
    $age = $_POST["age"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $state = $_POST["state"];

    // sql to update a record
    $sql = "UPDATE `patientdetails` SET `patientName`='$patientName', `dateOfBirth`='$dateOfBirth', `age`='$age', `address`='$address', `city`='$city', `state`='$state' WHERE `id`='$id'";

    $result = $conn->query($sql);

    if($result == TRUE) {
      echo 'Record Updated Successfully.';
      header("Location: view.php");
    } else {
      echo 'Error: ' . $sql . '<br>' . $conn->error;
    }
  }

  if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // sql to get a record
    $sql = "SELECT * FROM `patientdetails` WHERE `id`='$id'";

    $result = $conn->query($sql);

    if($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $patientName = $row["patientName"];
        $dateOfBirth = $row["dateOfBirth"];
        $age = $row["age"];
        $address = $row["address"];
        $city = $row["city"];
        $state = $row["state"];
      }
      } else{ 
          header('Location: view.php');
      } 
    }
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Document</title>
</head>
<body>
  <div class="container-sm mt-3 p-5">
    <h2>Update Patient Details</h2>

      <form action="" method="post" >
      <fieldset>
        <legend>Patient Information:</legend>
        <div class="mb-3 mt-3">
          <label for="name" class="form-label">Name:</label>
          <input type="text" name="patientName" value="<?php echo $patientName; ?>"  class="form-control" id="name" />
          <input type="hidden" name="id" value="<?php echo $id; ?>">
        </div>
        <div class="mb-3">
          <label for="dateOfBirth" class="form-label">Date of Birth:</label>
          <input type="date" name="dateOfBirth" class="form-control" id="dateOfBirth" value="<?php echo $dateOfBirth; ?>" />
        </div>
        <div class="mb-3">
          <label for="age" class="form-label">Age:</label>
          <input type="number" name="age" class="form-control" id="age" placeholder="Enter Age" value="<?php echo $age; ?>" />
        </div>
        <div class="mb-3">
          <label for="address" class="form-label">Address:</label>
          <input type="text" name="address" class="form-control" id="address" placeholder="Enter Address" value="<?php echo $address; ?>" />
        </div>
        <div class="mb-3">
          <label for="city" class="form-label">City:</label>
          <input type="text" name="city" class="form-control" id="city" placeholder="Enter City" value="<?php echo $city; ?>" />
        </div>
        <div class="mb-3">
          <label for="state" class="form-label">State:</label>
          <input type="text" name="state" class="form-control" id="state" placeholder="Enter State" value="<?php echo $state; ?>" />
        </div>
        <input type="submit" value="Update" name="update"  class="btn btn-success" />
      </fieldset>
    </form>
  </div>
</body>
</html>
