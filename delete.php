<?php

include("database.php");


   // sql to delete a record
$sql = "DELETE FROM Clients WHERE id='$_GET[idDeleted]'";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
  header('location:read.php');
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}




?>
