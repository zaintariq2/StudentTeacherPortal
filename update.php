<link rel="stylesheet" href="up_form.css">
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
      // editor data 
      if (isset($_GET['edit'])) {
        $id = $_GET['edit'];
        $update = true;
        $up_s =  "SELECT * FROM Student WHERE id=$id";
    
        if (mysqli_query($conn, $up_s)) {
          $n = mysqli_fetch_array(mysqli_query($conn, $up_s));
            $Name = $n['Full Name'];
            $Phone = $n['Phone'];
            $Email = $n['Email'];
        }
      }
  
      ?>
      
      <form method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <!-- // modified form fields -->
        <input type="text" name="Name" value="<?php echo $Name; ?>">
        <input type="text" name="Phone" value="<?php echo $Phone; ?>">
        <input type="text" name="Email" value="<?php echo $Email; ?>">
        
        <?php if ($update == true): ?>
            <button class="btn" type="submit" name="update"  style="background: #556B2F;" >update</button>
        <?php else: ?>
            <button class="btn" type="submit" name="save" >Save</button>
        <?php endif ?>
      </form>
      
      <?php
      //update
      
      if (isset($_POST['update'])) {
          $id = $_POST['id'];
         $Name = $_POST['Name'];
         $Phone = $_POST['Phone'];
         $Email = $_POST['Email'];
        mysqli_query($conn, "UPDATE `student` SET `Full Name`='$Name',`Phone`='$Phone',`Email`='$Email' WHERE id=$id");
        header('location: detail_show_student.php');
        }

  }?>
    