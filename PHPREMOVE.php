
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
        echo "<br>Connected successfully! <br>";

  // collect value of input field
           //remove
           if(isset($_POST['Remove'])) {
                     $EMAIL = $_POST['emailPhone'];
                     $Designation = $_POST['designation'];
                    if($Designation=='Student'){

                        $sql = "DELETE FROM `Student` WHERE `Email` = '$EMAIL'";

                    }
                    else if($Designation=='Teacher'){
                            $sql = "DELETE FROM `Teacher` WHERE `Email` = '$EMAIL'";
                    }
                    else {
                            echo "<br> ENTER CORRECT DETAIL! <br>";
//                             header("Location: remove_detail.php");
                               die;
                     }
                if ($conn->query($sql) === TRUE) {
                     echo "Record deleted successfully";
//                      header("Location: manager.html");
                     die;
                 } else {
                        echo "Error deleting record: " . $conn->error;
                   }
            }
     }

?>





