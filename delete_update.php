<?php
//error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "itu_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  else
  {
      

    // delete data
    if (isset($_GET['del'])) {
        $sql_s = "DELETE FROM Student WHERE id ='" . $_GET["del"] . "'";

        if (mysqli_query($conn, $sql_s)) {
            echo "Record deleted successfully";
            header("Location: detail_show_student.php");
        } 
    }
    elseif (isset($_GET['tid'])) {
      $sql_t = "DELETE FROM Teacher WHERE id ='" . $_GET["tid"] . "'";
      if(mysqli_query($conn, $sql_t)) {
        echo "error deleted successfully";
        header("Location: detail_show_teacher.php");
      }  
  }
    else {
      echo "Error deleting record: " . mysqli_error($conn);
    }
  }
mysqli_close($conn);
?>