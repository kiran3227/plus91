<?php

  include "config.php";

  // sql to get all records
  $sql = "SELECT * FROM patientdetails";

  $result = $conn->query($sql);
  

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Patient Details</title>
</head>
<body>
  <div class='container'>
    <h2>Patient Details</h2>
    <a href="newpatient.php" class='btn btn-primary'>Add New Patient</a>

    <table class='table'>
      <thead>
        <tr>
          <th>ID</th>
          <th>Patient Name</th>
          <th>Date of Birth</th>
          <th>Age</th>
          <th>Address</th>
          <th>City</th>
          <th>State</th>
        </tr>
      </thead>
      <tbody>
        <?php

          if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
        ?>

          <tr>
            <td><?php echo $row['id']; ?> </td>
            <td><?php echo $row['patientName']; ?> </td>
            <td><?php echo $row['dateOfBirth']; ?> </td>
            <td><?php echo $row['age']; ?> </td>
            <td><?php echo $row['address']; ?> </td>
            <td><?php echo $row['city']; ?> </td>
            <td><?php echo $row['state']; ?> </td>
            <td>
              <a href="update.php?id=<?php echo $row['id']; ?>" class='btn btn-info'>Update</a>
              <a href="delete.php?id=<?php echo $row['id']; ?>" class='btn btn-danger'>Delete</a>    
            </td>
          </tr>

        <?php
            }
          }

        ?>
      </tbody>
    </table>
  </div>
</body>
</html>