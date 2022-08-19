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
        echo "<br>Sign up Connected successfully! <br>";

  // collect value of input field
            $NAME = $_POST['full-name'];
            $PHONE = $_POST['phone'];
            $EMAIL = $_POST['email'];
            $Designation = $_POST['designation'];
            $Password = $_POST['Password'];
            $Security = $_POST['security'];

   if (!empty($NAME) && !empty($PHONE) &&  !empty($EMAIL) &&  !empty($Designation) &&  !empty($Password) ) {

            if($Designation=='Student'){
///inserted data
                $sql = "INSERT INTO Student VALUES ('?','$NAME','$PHONE' ,'$EMAIL','$Password')";

// sql data
            if ($conn->query($sql) === TRUE) {
                echo "<br> New record created successfully! <br>";

                			mysqli_query($conn, $sql);
                 			header("Location: LOGIN.php");
                			die;
             }
            else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }

            }
      else if($Designation=='Teacher'){

                    if($Security=='T123')
                     {      $sql = "INSERT INTO Teacher VALUES ('?','$NAME','$PHONE' ,'$EMAIL','$Password')";

           // sql data
                       if ($conn->query($sql) === TRUE) {
                           echo "<br> New record created successfully! <br>";

                           			mysqli_query($conn, $sql);
                            			header("Location: LOGIN.php");
                           			die;
                        }
                       else {
                               echo "Error: " . $sql . "<br>" . $conn->error;
                           }
                      }
                      else
                      {
                            echo "<br> your security not match! <br>";
//                             header("Location: SIGNUP.php");
                            die;
                      }

                 }
                 
                 else {
                         echo "<br> Plz fill out complete form! <br>";
                         header("Location: SIGNUP.php");
                         die;
                       }

      }
      else {
        echo "<br> Plz fill out complete form! <br>";
//         header("Location: SIGNUP.php");
        die;
      }

}
$conn->close();

 ?>