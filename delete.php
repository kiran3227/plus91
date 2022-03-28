<?php

  include "config.php";

  if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // sql to delete a record
    $sql = "DELETE FROM `patientdetails` WHERE `id`='$id'";

    $result = $conn->query($sql);

    if($result == TRUE) {
      echo "Record Deleted Successfully!";
    } else {
      echo "Error: " . $sql . '<br>' . $conn->error;
    }
  }

?>