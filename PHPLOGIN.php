<?php
session_start();
//error_reporting(0);
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "itu_db";
    $Designation = $_POST['designation'];
// Create connection
    $connection = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($connection->connect_error) {
      die("Connection failed: " . $connection->connect_error);
    }
		//something was posted
		$EmailPhone = $_POST['emailPhone'];
		$Password = $_POST['password'];
		if(!empty($EmailPhone) && !empty($Password))
		{
//read from database

         if($Designation=='Student'){
               $_SESSION['emailPhone'] = $EmailPhone;
			$stu = "select * from Student where Email = '$EmailPhone' AND Password ='$Password'  limit 1";
		    $result_stu = mysqli_query($connection, $stu);
        if(mysqli_num_rows($result_stu) > 0)
				{
                    	 $row = mysqli_fetch_assoc($result_stu);
                         $Name = $row["Full Name"];
                         echo "Login Successful...Welcome ".$Name;
                         header("Location: student.html");
                }
      }
         else if($Designation=='Teacher'){
			$tea = "select * from Teacher where Email = '$EmailPhone' AND Password ='$Password' limit 1";
			$result_tea = mysqli_query($connection, $tea);
      if(mysqli_num_rows($result_tea) > 0)
      {
                     $row = mysqli_fetch_assoc($result_tea);
                       $Name = $row["Full Name"];
                       echo "Login Successful...Welcome ".$Name;
                       header("Location: teacher.html");
              }
    }
                else
                 {
        			echo "wrong Email or password!";
        			 header("Location: LOGIN.php");
                            die;
                 }
		}
		else
		{
			echo "wrong Email or password!";
			header("Location: LOGIN.php");
            die;
		}
 ?>